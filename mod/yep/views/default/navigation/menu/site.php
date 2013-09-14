<?php
/**
 * Site navigation menu
 *
 * @uses $vars['menu']['default']
 * @uses $vars['menu']['more']
 */

$default_items = elgg_extract('default', $vars['menu'], array());
// $featured_names = elgg_get_config('site_featured_menu_names');
$featured_permissions = elgg_get_config('site_featured_menu_permissions');

echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-default clearfix">';
foreach ($default_items as $i => $menu_item) {
	// $name = $menu_item->getName();
	// if (in_array($name, $featured_names)) {
		// $i = $featured_names[array_search($name, $featured_names)];
		
	// }
	switch ($featured_permissions[$i]) {
	case 'connected':
		$allowed = elgg_is_logged_in();
		break;
	case 'disconnected':
		$allowed = !elgg_is_logged_in();
		break;
	default:
		$allowed = true;
	}
	if ($allowed) {
		echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
	}
}

$featured_menu_show_more = elgg_get_config('site_featured_menu_show_more');
if ($featured_menu_show_more !== false) {
	$more_items = elgg_extract('more', $vars['menu'], array());
	if ($more_items) {
		echo '<li class="elgg-more">';

		$more = elgg_echo('more');
		echo "<a href=\"#\">$more</a>";
		
		echo elgg_view('navigation/menu/elements/section', array(
			'class' => 'elgg-menu elgg-menu-site elgg-menu-site-more', 
			'items' => $more_items,
		));
		
		echo '</li>';
	}
}
echo '</ul>';

