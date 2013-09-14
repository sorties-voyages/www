<?php
/* ######################################################
 *  Ramón Iglesias
 *  monchomail@gmail.com 
 *  12-08-2012
 * ###################################################### */


global $CONFIG;

$optionsSiNo = array( 
					elgg_echo('option:yes') => 1,
					elgg_echo('option:no') => 0
				);
$optionsEsquemas = array(
						'sitemaps_org_0_9' => 'Sitemaps Protocol 0.9'		
					);

$optionsChangefreq = array(
						'disabled' => elgg_echo('auto_sitemap:updatefreq:disabled'),
						'always' => elgg_echo('auto_sitemap:updatefreq:always'),
						'hourly' => elgg_echo('auto_sitemap:updatefreq:hourly'),
						'daily' => elgg_echo('auto_sitemap:updatefreq:daily'),
						'weekly' => elgg_echo('auto_sitemap:updatefreq:weekly'),
						'monthly' => elgg_echo('auto_sitemap:updatefreq:monthly'),
						'yearly' => elgg_echo('auto_sitemap:updatefreq:yearly'),
						'never' => elgg_echo('auto_sitemap:updatefreq:never')		
					);
					
$optionsPriority = array(
						'none' => elgg_echo('auto_sitemap:priority:none'),
						'0.0' => '0.0',
						'0.1' => '0.1',
						'0.2' => '0.2',
						'0.3' => '0.3',
						'0.4' => '0.4',
						'0.5' => '0.5',
						'0.6' => '0.6',
						'0.7' => '0.7',
						'0.8' => '0.8',
						'0.9' => '0.9',
						'1.0' => '1.0'
					);					

/* Esquema ########################################################################## */

$content = elgg_echo('auto_sitemap:esquema:description'); 
$content .= ' ( <a href="http://www.sitemaps.org/protocol.html"> http://www.sitemaps.org/protocol.html </a> ) <br>';
$content .= elgg_view('input/dropdown', array(
											'id' => 'slEsquema',
											'name' => 'params[esquema]',
											'options_values' => $optionsEsquemas,
											'value' => $vars['entity']->esquema
										));
										 									
$body .= elgg_view_module(
							'inline', 
							elgg_echo('auto_sitemap:esquema:title'), 
							$content
					);

					
					
/* URL principal ########################################################################## */
					
$content .= elgg_echo('auto_sitemap:main_url:description').'<br>';
$content = elgg_view('input/text',array(
									'id'=>'inMainUrl',
									'name'=>'params[main_url]',
									'value'=>( $vars["entity"]->main_url ? $vars["entity"]->main_url : $CONFIG->url ))
									);

$content .='<div style="width:50%;float:left">';
	$content .= elgg_echo('auto_sitemap:changefreq:description').'<br>';
	$content .= elgg_view('input/dropdown', array(
											'name' => 'params[main_url_changefreq]',
											'options_values' => $optionsChangefreq,
											'value' => $vars['entity']->main_url_changefreq
											));

$content .='</div>';
$content .='<div style="width:50%;float:left">';

	$content .= elgg_echo('auto_sitemap:priority:description').'<br>';
	$content .= elgg_view('input/dropdown', array(
											'name' => 'params[main_url_priority]',
											'options_values' => $optionsPriority,
											'value' => $vars['entity']->main_url_priority
											));
$content .='</div>';

$moduleHeader = elgg_view('output/url', array(
	'href' => '#toggle-main-url',
	'rel' => 'toggle',
	'text' => 	elgg_echo('auto_sitemap:main_url:title')
));

$body .= elgg_view_module(
							'inline', 
							$moduleHeader, 
							'<div id="toggle-main-url" style="display:block">' . 
								$content . 
							'</div>'
					);

										


					
/* Changefreq URLSs ########################################################################## */					
$tipos = Array('always' , 'hourly' , 'daily' ,'weekly' , 'monthly', 'yearly', 'never');					

foreach ($tipos as $tipo) {

	// nombre de los atributos
	$entityUrl = $tipo . '_url';
	$entityPriority = $tipo . '_url_priority';
	
	$activo = ( !empty($vars['entity']->$entityUrl) || $vars['entity']->$entityUrl != "");
	
	
	$content = elgg_echo('auto_sitemap:changefreq_url:description');
	$content .= elgg_view('input/plaintext',array(
												'id'=>'inAlwaysUrl',
												'name'=>'params[' . $tipo . '_url]',
												'value'=>$vars["entity"]->$entityUrl));
	
	$content .= elgg_echo('auto_sitemap:priority:description').'<br>';
	$content .= elgg_view('input/dropdown', array(
											'name' => 'params[' . $tipo . '_url_priority]',
											'options_values' => $optionsPriority,
											'value' => $vars['entity']->$entityPriority
											));
	
	$moduleHeader = elgg_view('output/url', array(
		'href' => '#toggle-' . $tipo,
		'rel' => 'toggle',
		'text' => 	elgg_echo('auto_sitemap:module:header:changefreq') . ' ' . 
					elgg_echo('auto_sitemap:updatefreq:' . $tipo)
	));

	$body .= elgg_view_module(
								'inline', 
								$moduleHeader, 
								'<div id="toggle-' . $tipo . '" style="display:' . ( $activo ? 'block' : 'none' ) . '">' . $content . '</div>'
						);
						
}
					

/* Entity URLSs ########################################################################## */					
global $relevantEntities;

foreach ($relevantEntities as $tipo) {
	
	// nombre de los atributos
	$entityUrl = $tipo . '_url';
	$entityChangefreq = $tipo . '_url_changefreq';
	$entityPriority = $tipo . '_url_priority';

	$activo = ($vars['entity']->$entityUrl ? 1 : 0);
	
	$content = elgg_echo('auto_sitemap:module:active:entity', array(elgg_echo('auto_sitemap:entity:' . $tipo . ':title'))); 
	$content .= elgg_view('input/radio',array(
										'name'=>'params[' . $tipo . '_url]',
										'value'=> $activo,
										'options'=>$optionsSiNo
									)
						);
	
	$content .='<div style="width:50%;float:left">';
		$content .= elgg_echo('auto_sitemap:changefreq:description').'<br>';
		$content .= elgg_view('input/dropdown', array(
												'name' => 'params[' . $tipo . '_url_changefreq]',
												'options_values' => $optionsChangefreq,
												'value' => $vars['entity']->$entityChangefreq
												));
	$content .='</div>';
	$content .='<div style="width:50%;float:left">';
		
		$content .= elgg_echo('auto_sitemap:priority:description').'<br>';
		$content .= elgg_view('input/dropdown', array(
												'name' => 'params[' . $tipo . '_url_priority]',
												'options_values' => $optionsPriority,
												'value' => $vars['entity']->$entityPriority
												));
	$content .='</div>';

	$moduleHeader = elgg_view('output/url', array(
		'href' => '#toggle-' . $tipo,
		'rel' => 'toggle',
		'text' => 	elgg_echo('auto_sitemap:module:header:entity') . 
					elgg_echo('auto_sitemap:entity:' . $tipo . ':title') 
	));

	$body .= elgg_view_module(
								'inline', 
								$moduleHeader, 
								'<div id="toggle-' . $tipo . '" style="display:' . ( $activo ? 'block' : 'none' ) . '">' . 
									$content . 
								'</div>'
						);

		
}


								
/* entities URLs  ########################################################################## */

$listaTipos = Array();

$listaTipos = xml_plugin_get_otherEntityTypes();

// explode and remove empty
$activeEntities = array_filter(explode(',', $vars["entity"]->other_urls_types ));

$activo = !empty($activeEntities);

$content = elgg_echo('auto_sitemap:other_entities:description').'<br>';
$content .= '<div class="dvOtherEntities">';
	$content .= elgg_view('input/checkboxes',array(
										'name'=>'rbOtherEntities',
										'value'=>$activeEntities,
										'options'=>$listaTipos,
										'default' => false));
$content .= '</div>';

$content .= elgg_view('input/hidden',array(	
											'id'=>'inOtherEntities',
											'class'=>'inOtherEntities',
											'name'=>'params[other_urls_types]',
											'value'=>$vars["entity"]->other_urls_types)
					);

					

$content .='<div style="width:50%;float:left">';
	$content .= elgg_echo('auto_sitemap:changefreq:description').'<br>';
	$content .= elgg_view('input/dropdown', array(
											'name' => 'params[other_url_changefreq]',
											'options_values' => $optionsChangefreq,
											'value' => $vars['entity']->other_url_changefreq
											));
$content .='</div>';
$content .='<div style="width:50%;float:left">';
	
	$content .= elgg_echo('auto_sitemap:priority:description').'<br>';
	$content .= elgg_view('input/dropdown', array(
											'name' => 'params[other_url_priority]',
											'options_values' => $optionsPriority,
											'value' => $vars['entity']->other_url_priority
											));
$content .='</div>';


					
$moduleHeader = elgg_view('output/url', array(
	'href' => '#toggle-other-entity' ,
	'rel' => 'toggle',
	'text' => elgg_echo('auto_sitemap:module:header:entity') . 
					elgg_echo('auto_sitemap:entity:otros:title')
));

$body .= elgg_view_module(
							'inline', 
							$moduleHeader, 
							'<div id="toggle-other-entity" style="display:' . ( $activo ? 'block' : 'none' ) . '">' . 
								$content . 
							'</div>'
					);					
					

/* ########################################################################## */
?>
<script type="text/javascript">

	$(document).ready(function(){
		
		// cada vez que se pincha un checkbox se recorren todos para actualizar el hidden
		$('.dvOtherEntities input[type=checkbox]').click(function(){
			
			$('#inOtherEntities').val("");
			$('.dvOtherEntities input[type=checkbox]').each(function(){
				if ( $(this).is(':checked') ){
					// ugly hack para que no pinte la primera coma
					if ( $('#inOtherEntities').val() == ""){
						$('#inOtherEntities').val( $(this).val() );
					}else{
						$('#inOtherEntities').val( $('#inOtherEntities').val() + ',' + $(this).val() );
					}
				}
			});

			
		});	
	});
</script>

<style>
	form{
		margin: 0 auto;
	}

	#auto_sitemap_settings_form .elgg-head{
		margin-bottom:0px;
	}
	#auto_sitemap_settings_form .elgg-body{
		background: #f7f7f7;
		padding: 5px 5px 5px 20px;
	}
</style>

<?php 					
echo '<div id="auto_sitemap_settings_form">' . $body . '</div>';

