<?php
    /*******************************************************************************
     * spam_login_filter
     *
     * @author RayJ
     ******************************************************************************/

    function spam_login_filter_init() {
        global $CONFIG;

		register_plugin_hook("action", "register", "spam_login_filter_verify_action_hook", 999);
		
		// Extend context menu with admin links
		if (isadminloggedin()){
			$api_key = get_plugin_setting('stopforumspam_api_key', 'spam_login_filter');
			if (is_plugin_enabled('tracker') && !empty($api_key)){
				elgg_extend_view('profile/menu/adminlinks','spam_login_filter/adminlinks');
				register_action("spam_login_filter/delete", false, dirname(__FILE__) . "/actions/delete.php", true);
			}
		}
		
        return true;
    }


    function spam_login_filter_verify_action_hook($hook, $entity_type, $returnvalue, $params) {
		global $CONFIG;
		//Check against stopforumspam and domain blacklist
		$email = get_input('email');
		
		if (validateUser($email, $_SERVER['REMOTE_ADDR'])) {		
			return true;
		}
		else {
			if(get_plugin_setting("notify_by_mail") == "yes"){
			
				//Notify spam tentative to administrator
				$site = get_entity($CONFIG->site_guid);
				if (($site) && (isset($site->email))) {
					$from = $site->email;
				} else {
					$from = 'noreply@' . get_site_domain($CONFIG->site_guid);
				}

				$message = sprintf(elgg_echo('spam_login_filter:notify_message'), $email, $_SERVER['REMOTE_ADDR']);

				elgg_send_email($from, get_plugin_setting("notify_mail_address"), elgg_echo('spam_login_filter:notify_subject'), $message);
			}

			return false;
		}
    }
	
	
	function validateUser($register_email,$register_ip){
		global $CONFIG;
		$spammer = false;
		
		//Mail domain blacklist
		if(get_plugin_setting("use_mail_domain_blacklist") == "yes"){
			$blacklistedMailDomains = preg_split('/\\s+/', get_plugin_setting("blacklisted_mail_domains"), -1, PREG_SPLIT_NO_EMPTY);
			$mailDomain = explode("@", $register_email);
			
			foreach ($blacklistedMailDomains as $domain) {
				if ($mailDomain[1] == $domain) {
					register_error(elgg_echo('spam_login_filter:access_denied_domain_blacklist'));
					$spammer = true;
				}
			}
		}
		
		if ($spammer != true)
		{
			//Mail blacklist
			if(get_plugin_setting("use_mail_blacklist") == "yes"){
				$blacklistedMails = preg_split('/\\s+/', get_plugin_setting("blacklisted_mails"), -1, PREG_SPLIT_NO_EMPTY);
				
				foreach ($blacklistedMails as $blacklistedMail) {
					if ($blacklistedMail == $register_email) {
						register_error(elgg_echo('spam_login_filter:access_denied_mail_blacklist'));
						$spammer = true;
					}
				}
			}
		}
		
		if ($spammer != true)
		{
			//StopForumSpam
			if(get_plugin_setting("use_stopforumspam") == "yes"){

				//check the e-mail adress
				$url = "http://www.stopforumspam.com/api?email=".$register_email."&f=serial";
				
				$return = file_get_conditional_contents($url);
				
				if ($return != false) {
					$data = unserialize($return);
					$email_frequency = $data[email][frequency];
						if($email_frequency != '0'){
							register_error(elgg_echo('spam_login_filter:access_denied_mail_blacklist'));
							$spammer = true;
						}
				}

				if($spammer != true){
				//e-mail not found in the database, now check the ip
					$url = "http://www.stopforumspam.com/api?ip=".$register_ip."&f=serial";
					
					$return = file_get_conditional_contents($url);
					
					if ($return != false) {
						$data = unserialize($return);
						$ip_frequency = $data[ip][frequency];
							if($ip_frequency != '0'){
								register_error(elgg_echo('spam_login_filter:access_denied_ip_blacklist'));
								$spammer = true;
							}
					}
				}
				
			}
		}		
		
		return !$spammer;
	}
	
	function file_get_conditional_contents($szURL)
	{
		$pCurl = curl_init($szURL);
		
		curl_setopt($pCurl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($pCurl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($pCurl, CURLOPT_TIMEOUT, 10);

		$szContents = curl_exec($pCurl);
		$aInfo = curl_getinfo($pCurl);
		
		if($aInfo['http_code'] === 200)
		{
			return $szContents;
		}
		
		return false;
	}

    register_elgg_event_handler('init', 'system', 'spam_login_filter_init');
?>