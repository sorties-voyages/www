<?php
/**
 * Date
 * Displays a properly formatted date
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['value'] Date as text or a Unix timestamp in seconds
 */

// convert timestamps to text for display
if (empty($vars['value'])) {
	$vars['value'] = '';
} elseif (is_numeric($vars['value'])) {
	$vars['value'] = gmdate(elgg_echo('yep:date:format'), $vars['value']);
} else {
	if (is_array($vars['value'])) {
		$date = $vars['value'];
	} else {
		$date = explode('-', $vars['value']);
	}
	$vars['value'] = date(elgg_echo('yep:date:format'), mktime(0, 0, 0, $date[1], $date[2], $date[0]));
}

echo $vars['value'];
