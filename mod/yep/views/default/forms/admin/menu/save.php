<?php
/**
 * Form body for setting up site menu
 */

// @todo Could probably make this number configurable
$num_featured_items = 6;

// get site menu items
$menu = elgg_get_config('menus');
$menu = $menu['site'];
$builder = new ElggMenuBuilder($menu);
$menu = $builder->getMenu('name');
$menu_items = $menu['default'];

$featured_menu_names = elgg_get_config('site_featured_menu_names');
$dropdown_values = array();
foreach ($menu_items as $item) {
	$dropdown_values[$item->getName()] = $item->getText();
}
$dropdown_values[' '] = elgg_echo('none');

$featured_menu_permissions = elgg_get_config('site_featured_menu_permissions');
$dropdown_permissions = array(
	'all' => elgg_echo('yep:menu:permissions:all'),
	'connected' => elgg_echo('yep:menu:permissions:connected'),
	'disconnected' => elgg_echo('yep:menu:permissions:disconnected')
);

$featured_menu_show_more = elgg_get_config('site_featured_menu_show_more');
if ($featured_menu_show_more === null) {
	$featured_menu_show_more = true;
}

?>
<div class="elgg-module elgg-module-inline">
	<div class="elgg-head">
		<h3><?php echo elgg_echo('admin:menu_items:configure'); ?></h3>
	</div>
	<div class="elgg-body">
<?php
echo elgg_view('output/longtext', array(
	'value' => elgg_echo("admin:menu_items:description")
));

echo '<table border="0" cellspacing="0" cellpadding="0"><tr>';
for ($i=0; $i<$num_featured_items; $i++) {
	
	echo '<td>';
	
	if ($featured_menu_names && array_key_exists($i, $featured_menu_names)) {
		$current_value = $featured_menu_names[$i];
	} else {
		$current_value = ' ';
	}

	echo elgg_view('input/dropdown', array(
		'options_values' => $dropdown_values,
		'name' => 'featured_menu_names[]',
		'value' => $current_value
	));
	
	echo '<br />';
	
	if ($featured_menu_permissions && array_key_exists($i, $featured_menu_permissions)) {
		$current_value = $featured_menu_permissions[$i];
	} else {
		$current_value = 'all';
	}
	
	echo elgg_view('input/dropdown', array(
		'options_values' => $dropdown_permissions,
		'name' => 'featured_menu_permissions[]',
		'value' => $current_value
	));
	
	echo '</td>';
	
}
echo '</tr></table>';
echo '<br />';
echo '<label>';
echo elgg_view('input/checkbox', array(
	'name' => 'featured_menu_show_more',
	'value' => 'yes',
	'checked' => $featured_menu_show_more
));
echo elgg_echo("yep:menu:show_more") . '</label>';

?>
	</div>
</div>

<div class="elgg-module elgg-module-inline">
	<div class="elgg-head">
		<h3><?php echo elgg_echo('admin:add_menu_item'); ?></h3>
	</div>
	<div class="elgg-body">
<?php
echo elgg_view('output/longtext', array(
	'value' => elgg_echo("admin:add_menu_item:description")
));

$custom_items = elgg_get_config('site_custom_menu_items');

$name_str = elgg_echo('name');
$url_str = elgg_echo('admin:plugins:label:website');

echo '<ul class="elgg-list elgg-list-simple">';

if (is_array($custom_items)) {
	foreach ($custom_items as $title => $url) {
		$name_input = elgg_view('input/text', array(
			'name' => 'custom_menu_titles[]',
			'value' => $title
		));

		$url_input = elgg_view('input/text', array(
			'name' => 'custom_menu_urls[]',
			'value' => $url
		));

		echo "<li>$name_str: $name_input $url_str: $url_input $delete</li>";
	}
}

$new = elgg_echo('new');
$name_input = elgg_view('input/text', array(
	'name' => 'custom_menu_titles[]',
));

$url_input = elgg_view('input/text', array(
	'name' => 'custom_menu_urls[]',
));

echo "<li class='custom_menuitem'>$name_str: $name_input $url_str: $url_input</li>
</ul>";

?>
	</div>
</div>
<?php

echo elgg_view('input/submit', array('value' => elgg_echo('save')));
