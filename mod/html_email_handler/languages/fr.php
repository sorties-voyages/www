<?php 

	$french = array(
		'html_email_handler' => "HTML E-mail Handler",
		
		'html_email_handler:theme_preview:menu' => "HTML notification",
		
		// settings
		'html_email_handler:settings:notifications:description' => "Lorsque vous activez cette option, toutes les notifications aux utilisateurs de votre site seront au format HTML.",
		'html_email_handler:settings:notifications' => "Utiliser en tant que gestionnaire de notification d'e-mail par défaut",
		'html_email_handler:settings:notifications:subtext' => "Ceci enverra tous les e-mails sortants en tant que mails HTML",
		
		'html_email_handler:settings:sendmail_options' => "Paramètres supplémentaires à utiliser avec sendmail (facultatif)",
		'html_email_handler:settings:sendmail_options:description' => "Ici vous pouvez configurer les paramètres supplémentaires lorsque vous utilisez sendmail, par exemple -f%s (pour mieux se prévenir des mails étant marqués comme spam)",
		
		// notification body
		'html_email_handler:notification:footer:settings' => "Configurez vos paramètres de notification %sici%s",
		
	);

	add_translation("fr", $french);
