<?php
/**
 * YEP layout
 * 
 * You can edit the layout of this page with your own layout and style. 
 * Whatever you put in this view will appear on the front page of your site.
 * 
 */

$mod_params = array('class' => 'elgg-module-highlight');

?>

<div class="yep elgg-main elgg-grid clearfix">
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pvm prl">
<?php
// left column

$title = elgg_echo('yep:travels');
$body = elgg_view('output/longtext', array('value' => elgg_get_plugin_setting('travels')));

echo elgg_view_module('featured', $title, $body, $mod_params);

$title = elgg_echo('yep:activities');
$body = elgg_view('output/longtext', array('value' => elgg_get_plugin_setting('activities')));

echo elgg_view_module('featured', $title, $body, $mod_params);

?>
		</div>
	</div>
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pvm">
<?php
// right column

// events
$options = array(
	"full_view" => false,
	"pagination" => false
);
echo elgg_view_entity_list($vars['events'], $options);
// $title = elgg_echo('yep:nextEvent');
// echo elgg_view_module('featured', $title, $vars['events'], $mod_params);

?>
		</div>
	</div>
</div>
