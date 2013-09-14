<?php 
    //Stopforumspam
	echo elgg_echo('spam_login_filter:use_stopforumspam');
?>	
	<select name="params[use_stopforumspam]">
		<option value="yes" <?php if ($vars['entity']->use_stopforumspam == "yes") echo " selected=\"yes\" "; ?>>Yes</option>
		<option value="no" <?php if ($vars['entity']->use_stopforumspam == "no") echo " selected=\"yes\" "; ?>>No</option>
    </select><br><br>

<?php
	echo elgg_echo('spam_login_filter:stopforumspam_api_key');
    echo elgg_view('input/text', array('name' => "params[stopforumspam_api_key]", 'value' => $vars['entity']->stopforumspam_api_key));
	
	echo "<br><br>";
?>

<?php	
	//Domain blacklist
	echo elgg_echo('spam_login_filter:use_mail_domain_blacklist');
?>
	<select name="params[use_mail_domain_blacklist]">
		<option value="yes" <?php if ($vars['entity']->use_mail_domain_blacklist == "yes") echo " selected=\"yes\" "; ?>>Yes</option>
		<option value="no" <?php if ($vars['entity']->use_mail_domain_blacklist == "no") echo " selected=\"yes\" "; ?>>No</option>
    </select><br>
<?php
	echo elgg_echo('spam_login_filter:blacklisted_mail_domains');
	echo elgg_view('input/longtext', array('name' => "params[blacklisted_mail_domains]", 'value' => $vars['entity']->blacklisted_mail_domains));

	echo "<br><br>";
?>

<?php	
	//Email blacklist
	echo elgg_echo('spam_login_filter:use_mail_blacklist');
?>
	<select name="params[use_mail_blacklist]">
		<option value="yes" <?php if ($vars['entity']->use_mail_blacklist == "yes") echo " selected=\"yes\" "; ?>>Yes</option>
		<option value="no" <?php if ($vars['entity']->use_mail_blacklist == "no") echo " selected=\"yes\" "; ?>>No</option>
    </select><br>
<?php
	echo elgg_echo('spam_login_filter:blacklisted_mails');
	echo elgg_view('input/longtext', array('name' => "params[blacklisted_mails]", 'value' => $vars['entity']->blacklisted_mails));

	echo "<br><br>";
?>

<?php
	//Notify by mail
	echo elgg_echo('spam_login_filter:notify_by_mail');
?>
	<select name="params[notify_by_mail]">
		<option value="yes" <?php if ($vars['entity']->notify_by_mail == "yes") echo " selected=\"yes\" "; ?>>Yes</option>
		<option value="no" <?php if ($vars['entity']->notify_by_mail == "no") echo " selected=\"yes\" "; ?>>No</option>
    </select><br>

<?php
	echo elgg_echo('spam_login_filter:notify_mail_address');
    echo elgg_view('input/text', array('name' => "params[notify_mail_address]", 'value' => $vars['entity']->notify_mail_address));
?>