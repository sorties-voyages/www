<?php

	$english = array(
		//Return messages
		'spam_login_filter:access_denied_domain_blacklist' => "Access denied due to spam issues (Domain blacklisted). Please contact the site administrator.",
		'spam_login_filter:access_denied_mail_blacklist' => "Access denied due to spam issues (E-Mail blacklisted). Please contact the site administrator.",
		'spam_login_filter:access_denied_ip_blacklist' => "Access denied due to spam issues (IP blacklisted). Please contact the site administrator.",
		
		//User menu
		'spam_login_filter:delete_and_report' => "Remove and report as spammer",
		
		//Report to stopforumspam
		'spam_login_filter:empty_ip_error' => "User´s IP address is empty.",
		'spam_login_filter:empty_api_key_error' => "stopforumspam API key is empty.",
		'spam_login_filter:unable_report' => "Unable to contact stopforumspam.com.",
		'spam_login_filter:user_deleted' => "User removed.",
		'spam_login_filter:user_not_deleted' => "Unable to remove user.",
		
		//Configuration form
		'spam_login_filter:use_stopforumspam' => "Use stopforumspam.com",
		'spam_login_filter:stopforumspam_api_key' => "stopforumspam API Key (Optional)",

		'spam_login_filter:notify_by_mail' => "Notify blocked tentatives by e-mail",
		'spam_login_filter:notify_mail_address' => "E-Mail Address",
		'spam_login_filter:notify_subject' => "Spammer blocked",
		'spam_login_filter:notify_message' => "A spammer was blocked during registration.
			
E-Mail: %s.
			
IP: %s.",
			
		'spam_login_filter:use_mail_domain_blacklist' => "Use mail domain blacklist",
		'spam_login_filter:blacklisted_mail_domains' => "Blacklisted mail domains - One per line",
		
		'spam_login_filter:use_mail_blacklist' => "Use especific mail blacklist",
		'spam_login_filter:blacklisted_mails' => "Blacklisted mails - One per line"
			
	);
	add_translation("en",$english);

?>