<div id="event_manager_event_map" class="hidden">
	<div id="event_manager_onthemap_canvas"></div>
<?php
	if (elgg_is_logged_in()) {
?>
	<div id="event_manager_onthemap_legend">
<?php
		if (elgg_is_admin_logged_in()) {
?>
		<img src="//maps.google.com/mapfiles/ms/icons/yellow-dot.png" /><?php echo elgg_echo("event_manager:list:navigation:your"); ?>
<?php
		}
?>
		<img src="//maps.google.com/mapfiles/ms/icons/blue-dot.png" /><?php echo elgg_echo("event_manager:list:navigation:attending"); ?>
		<img src="//maps.google.com/mapfiles/ms/icons/red-dot.png" /> <?php echo elgg_echo("event_manager:list:navigation:other"); ?>
	</div>	
<?php
	}
?>
</div>