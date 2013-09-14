<?php
/* ######################################################
 *  Ramón Iglesias
 *  monchomail@gmail.com 
 *  12-08-2012
 * ###################################################### */
$english = array(

	'auto_sitemap:esquema:title' => 'Scheme of the sitemap',
	'auto_sitemap:esquema:description' => 'For the time being there is only implemented version 0.9 of sitemaps.org.',
	'auto_sitemap:main_url:title' => 'Main URL of the site',


	/* Opciones dropdown*/
	'auto_sitemap:updatefreq:disabled' => 'disabled (Skip this value)',
	'auto_sitemap:updatefreq:always' => 'continuously (always)',
	'auto_sitemap:updatefreq:hourly' => 'every hour (hourly)',
	'auto_sitemap:updatefreq:daily' => 'every day (daily)',
	'auto_sitemap:updatefreq:weekly' => 'every week (weekly)',
	'auto_sitemap:updatefreq:monthly' => 'every month (monthly)',
	'auto_sitemap:updatefreq:yearly' => 'every year (yearly)',
	'auto_sitemap:updatefreq:never' => 'never (never)',

	
	'auto_sitemap:module:header:changefreq' => 'URLs that get updated ',
	'auto_sitemap:changefreq_url:description' => 'Each URL in one line',
	
	'auto_sitemap:other_entities:description' => 'Choose other entities to include in the sitemap',

	'auto_sitemap:module:header:entity' => 'URLs for ',
	'auto_sitemap:module:active:entity' => 'Add %s to sitemap? ',
	'auto_sitemap:entity:user:title' => 'user profiles',
	'auto_sitemap:entity:group:title' => 'groups profiles',
	'auto_sitemap:entity:blog:title' => 'blog posts',
	'auto_sitemap:entity:file:title' => 'uploaded files',
	'auto_sitemap:entity:event:title' => 'events from event_calendar',
	'auto_sitemap:entity:otros:title' => 'other entities',

		
	'option:yes' => 'Yes',
	'option:no' => 'No',

	'auto_sitemap:priority:none' => 'None',
	'auto_sitemap:changefreq:description' => 'Choose a value for the changefreq atribute',
	'auto_sitemap:priority:description' => 'Choose a priority for this URLs',

);
add_translation("en", $english);	

