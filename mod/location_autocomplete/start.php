<?php
/**
 * Describe plugin here
 */

elgg_register_event_handler('init', 'system', 'location_autocomplete_init');

function location_autocomplete_init() {


	// Extend the main CSS file
	elgg_extend_view('css/elgg', 'location_autocomplete/css');
        
        elgg_register_js('elgg.jquery_min', "http://code.jquery.com/jquery-1.4.2.min.js");
        
        elgg_register_js('elgg.google_map', "http://maps.google.com/maps/api/js?sensor=false");
        
        $custom_js = elgg_get_simplecache_url('js', 'location_autocomplete/jquery_custom');
	elgg_register_js('elgg.jquery_custom', $custom_js);      
        
        $suggests_js = elgg_get_simplecache_url('js', 'location_autocomplete/geo_suggests');
	elgg_register_js('elgg.geo_suggests', $suggests_js);  
        
        elgg_extend_view("forms/profile/edit", "location_autocomplete/load_js");
        
        elgg_extend_view("forms/register", "location_autocomplete/load_js");        


}
