<?php
/**
 * Elgg date input
 * Displays a text field with a popup date picker.
 *
 * The elgg.ui JavaScript library initializes the jQueryUI datepicker based
 * on the CSS class .elgg-input-date. It uses the ISO 8601 standard for date
 * representation: yyyy-mm-dd.
 *
 * Unix timestamps are supported by setting the 'timestamp' parameter to true.
 * The date is still displayed to the user in a text format but is submitted as
 * a unix timestamp in seconds.
 *
 * @uses $vars['value']     The current value, if any (as a unix timestamp)
 * @uses $vars['class']     Additional CSS class
 */

//@todo popup_calendar deprecated in 1.8.  Remove in 2.0
if (isset($vars['class'])) {
	$vars['class'] = "elgg-input-date popup_calendar {$vars['class']}";
} else {
	$vars['class'] = "elgg-input-date popup_calendar";
}

$defaults = array(
	'value' => '',
	'disabled' => false,
);

$vars = array_merge($defaults, $vars);

$name = $vars['name'];
unset($vars['name']);
if (empty($name)) {
	$name = $vars['internalname'];
}
unset($vars['internalname']);

$storage_date_format = 'Y-m-d';

$vars['value'] = get_input($name, $vars['value']);

// convert timestamps to text for display
if (is_numeric($vars['value'])) {
	$vars['value'] = gmdate($storage_date_format, $vars['value']);
}

if (empty($vars['value'])) {
	$date = array();
} elseif (is_array($vars['value'])) {
	$date = $vars['value'];
} else {
	$date = explode('-', $vars['value']);
}

$fields = array(
	'Y' => array(
		'index' => 0,
		'name' => elgg_echo('yep:date:year'),
		'start' => 1900,
		'end' => date('Y') - 17
	),
	'm' => array(
		'index' => 1,
		'name' => elgg_echo('yep:date:month'),
		'start' => 1,
		'end' => 12
	),
	'd' => array(
		'index' => 2,
		'name' => elgg_echo('yep:date:day'),
		'start' => 1,
		'end' => 31
	)
);

$names = explode(elgg_echo('yep:date:separator'), elgg_echo('yep:date:format'));
echo '<div>';
foreach ($names as $n) {
	$field = $fields[$n];
	$index = $field['index'];
	$vars['name'] = $name . '[' . $index . ']';
	$options_values = array('' => $field['name']);
	for ($i = $field['start']; $i <= $field['end']; $i++) {
		$options_values[$i] = $i;
	}
	$vars['options_values'] = $options_values;
	$vars['value'] = $date[$index];
	echo elgg_view("input/dropdown", $vars);
}
echo '</div>';
