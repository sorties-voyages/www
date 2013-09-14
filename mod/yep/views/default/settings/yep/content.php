<div>
<?php 

$type = $vars['type'];

//This is an instance of the ElggWidget class that represents our widget.
$widget = $vars['widget'];

echo elgg_view('input/longtext', array(
	'name' => "params[$type]", 
	'value' => $widget->{$type}
));

?>
</div>