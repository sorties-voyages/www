<?php

// featured menu items

$featured_names = get_input('featured_menu_names', array());
$featured_names = array_unique($featured_names);

$featured_permissions = get_input('featured_menu_permissions', array());
foreach ($featured_permissions as $i) {
	if (($featured_permissions[$i] == 'all') || !$featured_names[$i] || ($featured_names[$i] == ' ')) {
		unset($featured_permissions[$i]);
	}
}
elgg_save_config('site_featured_menu_permissions', $featured_permissions);

$featured_show_more = get_input('featured_menu_show_more', 'yes');
elgg_save_config('site_featured_menu_show_more', $featured_show_more == 'yes');

?>