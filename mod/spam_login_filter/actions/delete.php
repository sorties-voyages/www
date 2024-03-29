<?php
	// block non-admin users - require since this action is not registered
	admin_gatekeeper();
	
	$forward = REFERER;
	$deleted = false;

	// Get the user
	$guid = get_input('guid');
	$obj = get_entity($guid);

	$name = $obj->name;
	$username = $obj->username;
	$email = $obj->email;
	$ip_address = $obj->ip_address;
	$api_key = get_plugin_setting('stopforumspam_api_key', 'spam_login_filter');
	
	if (empty($ip_address)){
		register_error(elgg_echo('spam_login_filter:empty_ip_error'));
		forward($forward);
	}
	
	if (empty($api_key)){
		register_error(elgg_echo('spam_login_filter:empty_api_key_error'));
		forward($forward);
	}
	
	if (!empty($ip_address) && !empty($api_key)){
		//Report the spammer
		$url = 'http://www.stopforumspam.com/add.php?username='.$username.'&ip_addr='.$ip_address.'&email='.$email.'&api_key='.$api_key;
		$return = file_get_conditional_contents($url);
		
		if ($return == false)
		{
			register_error(elgg_echo('spam_login_filter:unable_report'));
			forward($forward);
		}
	}

	if (($obj instanceof ElggUser) && ($obj->canEdit())) {
		if ($obj->delete()) {
			system_message(sprintf(elgg_echo('spam_login_filter:user_deleted'), $name));
			$deleted = true;
		} else {
			register_error(elgg_echo('spam_login_filter:user_not_deleted'));
		}
	} else {
		register_error(elgg_echo('spam_login_filter:user_not_deleted'));
	}

	// forward to user administration if on a user's page as it no longer exists
	if ($deleted) {
		$forward = "pg/admin/user/";
	}

	forward($forward);
?>