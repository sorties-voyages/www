<?php

function yep_get_index() {
    if (!include_once(dirname(__FILE__) . "/pages/index.php"))
        return false;

    return true;
}

function yep_menu_save_action() {
    if (!include_once(dirname(__FILE__) . "/actions/admin/menu/save.php"))
        return false;

    return true;
}

function yep_check_dateOfBirth($fieldName) {
	elgg_make_sticky_form('register');
	$dateOfBirth = get_input($fieldName);
	if ((count($dateOfBirth) < 3) || ($dateOfBirth[0] == '') || ($dateOfBirth[1] == '') || ($dateOfBirth[2] == '')) {
		register_error(elgg_echo('yep:date:empty'));
		forward(REFERER);
	} elseif (!checkdate($dateOfBirth[1], $dateOfBirth[2], $dateOfBirth[0])) {
		register_error(elgg_echo('yep:date:invalid'));
		forward(REFERER);
	}
}

function yep_check_register() {
	yep_check_dateOfBirth('custom_profile_fields_dateOfBirth');
}

function yep_check_profile() {
	yep_check_dateOfBirth('dateOfBirth');
}

function yep_init() {
	
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	// Extend system CSS
	elgg_extend_view('css/elgg', 'css/yep');

   // Replace the default index page
    elgg_register_plugin_hook_handler('index', 'system', 'yep_get_index');
	
	// Add custom fields to the admin menu options
	elgg_register_plugin_hook_handler('action', 'admin/menu/save', 'yep_menu_save_action');
	
	 //block user registration if they don't check the box
	elgg_register_plugin_hook_handler('action', 'register', 'yep_check_register', 100);
	elgg_register_plugin_hook_handler('action', 'profile/edit', 'yep_check_profile', 100);
	
}

// register for the init, system event when our plugin start.php is loaded
elgg_register_event_handler('init', 'system', 'yep_init');

?>