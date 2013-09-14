<?php
/**
 * Elgg custom index page
 * 
 */
 
if (elgg_is_logged_in()) {
	forward('events');
}

elgg_push_context('front');

elgg_push_context('widgets');

elgg_pop_context();

$options = array(
	"limit" => 10,
);
$events = event_manager_search_events($options);

// lay out the content
$params = array(
	'events' => $events["entities"],
);
$body = elgg_view_layout('index', $params);

// no RSS feed with a "widget" front page
global $autofeed;
$autofeed = FALSE;

echo elgg_view_page('', $body);
