<?php
/* ######################################################
 *  Ramón Iglesias
 *  monchomail@gmail.com 
 *  12-08-2012
 * ###################################################### */


$spanish = array(

	'auto_sitemap:esquema:title' => 'Esquema del sitemap',
	'auto_sitemap:esquema:description' => 'Por ahora solo hay implementada la version 0.9 de sitemaps.org.',

	'auto_sitemap:main_url:title' => 'URL principal del sitio',


	/* Opciones dropdown*/
	'auto_sitemap:updatefreq:disabled' => 'descativado (Omitir este valor)',
	'auto_sitemap:updatefreq:always' => 'continuamente (always)',
	'auto_sitemap:updatefreq:hourly' => 'cada hora (hourly)',
	'auto_sitemap:updatefreq:daily' => 'cada día (daily)',
	'auto_sitemap:updatefreq:weekly' => 'cada semana (weekly)',
	'auto_sitemap:updatefreq:monthly' => 'cada mes (monthly)',
	'auto_sitemap:updatefreq:yearly' => 'cada año (yearly)',
	'auto_sitemap:updatefreq:never' => 'nunca (never)',

	'auto_sitemap:module:header:changefreq' => 'URLs que se actualizan ',
	'auto_sitemap:changefreq_url:description' => 'Introduce una URL por cada linea',

	'auto_sitemap:other_entities:description' => 'Selecciona otras entidades que se deben añadir al sitemap',
	
	'auto_sitemap:module:header:entity' => 'URLs para ',
	'auto_sitemap:module:active:entity' => 'Añadir %s al sitemap? ',
	'auto_sitemap:entity:user:title' => 'los perfiles de los usuarios',
	'auto_sitemap:entity:group:title' => 'los perfiles de los grupos',
	'auto_sitemap:entity:blog:title' => 'las entradas del blog',
	'auto_sitemap:entity:file:title' => 'los archivos',
	'auto_sitemap:entity:event:title' => 'los eventos del calendario',
	'auto_sitemap:entity:otros:title' => 'otras entidades',

		
	'auto_sitemap:priority:none' => 'Omitir',
	'auto_sitemap:changefreq:description' => 'Selecciona un valor para el atributo changefreq',
	'auto_sitemap:priority:description' => 'Selecciona una prioridad para estas URLs',

);
add_translation("es", $spanish);		 
