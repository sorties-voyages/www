<?php 
	$title = $vars["title"];
	$message = nl2br($vars["message"]);
	$language = get_current_language();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<base target="_blank" />
		
		<?php 
			if(!empty($title)){ 
				echo "<title>" . $title . "</title>\n";
			}
		?>
	</head>
	<body>
		<style type="text/css">
			body {
				font: 80%/1.4 "Lucida Grande", Verdana, sans-serif;
				color: #333333;				
			}
			
			a {
				color: #4690d6;
			}
			
			#notification_container {
				padding: 20px 0;
				width: 800px;
				margin: 0 auto;
			}
		
			#notification_header {
				background: #0086F1;
				margin: 0 0 10px 0;
				padding: 5px 0 10px;
			}
		
			#notification_header a {
				text-decoration: none;
				font-weight: bold;
				color: #FFFFFF;
				font-size: 1.5em;
			} 
			
			#notification_header_logo {
				float: left;
			}
			
			#notification_header_logo img {
				border: none;
				margin: 0 10px 0 10px;
			}
			
			#notification_wrapper {
				background: #0046a9;
				padding: 5px;
			}
			
			#notification_wrapper h2 {
				margin: 5px 0 5px 10px;
				color: #FFFFFF;
				font-size: 1.35em;
				line-height: 1.2em;
			}
			
			#notification_wrapper a  {
				color: #0055DD;
				font-weight: bold;
				text-decoration: none;
			}
			
			#notification_wrapper a:hover {
				text-decoration: underline;
			}
			
			#notification_content {
				background: #FFFFFF;
				color: #0054A7;
				padding: 20px;
			}
			
			#notification_footer {
				margin: 10px 0 0;
				background: #222222;
				color: #888888;
				padding: 10px;
				text-align: right;
			}
			
			#notification_footer a  {
				color: #AAAAAA;
				font-weight: bold;
				text-decoration: none;
			}
			
			#notification_footer a:hover {
				color: #EEEEEE;
			}
			
			.clearfloat {
				clear:both;
				height:0;
				font-size: 1px;
				line-height: 0px;
			}
			
		</style>
	
		<div id="notification_container">
			<div id="notification_header">
				<a href="<?php echo $vars["config"]->site->url; ?>" id="notification_header_logo">
					<img src="<?php echo $vars["config"]->site->url; ?>mod/yep/graphics/logo.png" height="30" />
				</a>
				<?php 
					$site_url = elgg_view("output/url", array("href" => $vars["config"]->site->url, "text" => $vars["config"]->site->name));
					echo $site_url;
				?>
			</div>
			<div id="notification_wrapper">
				<?php if(!empty($title)) echo elgg_view_title($title); ?>
			
				<div id="notification_content">
					<?php echo $message; ?>
				</div>
			</div>
			<div id="notification_footer">
				&nbsp;
				<?php 
					if(elgg_is_logged_in()){
						$settings_url = $vars["url"] . "settings";
						if(elgg_is_active_plugin("notifications")){
							$settings_url = $vars["url"] . "notifications/personal";
						}
						echo elgg_echo("html_email_handler:notification:footer:settings", array("<a href='" . $settings_url . "'>", "</a>"));
					}
				?>
				<div class="clearfloat"></div>
			</div>
		</div>
	</body>
</html>