<?php
$french = array(
             
       'image:agree' => "Êtes-vous un humain ?<br />Quel est le code dans l'image à gauche ?* (Si vous trouvez qu'il est difficile à lire, cliquez sur le bouton du son ou de rafraichissement pour un nouveau code)",
	'sirikinasa:isblank' => "Entrez les caractères ou lu texte affichés dans l'image.",

	'gutwacaptcha:required' => "Désolé, le code de sécurité saisi ne correspond pas du texte dans l'image.",
	
	/**
	* Account 
	*/
	
	'registerok' => "Vous vous êtes inscrit avec succès pour %s.",
	'uservalidationbyemail:registerok' => "Pour activer votre compte, merci de confirmer votre adresse email en cliquant sur le lien que nous venons de vous envoyer.",
	
	
	// catch the automated machines
	
	'gutwacaptcha:colour' => 'Couleur de fond du formulaire d\'enregistrement',
        'gutwacaptcha:emailsiteowner' => 'Email me spammers address',
        'gutwacaptcha:myemailaddress' => 'Email address to send spammers addresses to',
        'gutwacaptcha:spammercaught' => 'Spammer caught',
        'gutwacaptcha:spammerdetails' => 'The email address of the spammer is %s',

	// the language selection part 
	'gutwacaptcha:admin:settings:min_completeness' => 'Exhaustivité de langue minimum (ex. 1)',
	'gutwacaptcha:admin:settings:show_in_header' => 'Afficher sélecteur de langue dans la section du Captcha ?',
	'gutwacaptcha:admin:settings:autodetect' => 'Activer la détection automatique de la langue captcha (pour les utilisateurs non-connectés)',
	'gutwacaptcha:admin:settings:show_images' => 'Afficher des images de langue / pays (si disponible)',
	
	
	
);

add_translation("fr",$french);