<?php
/**
 * An french language definition file
 */

$french = array(
	'facebook_connect' => 'Services Facebook',
	
	'facebook_connect:button' => 'connexion-avec-facebook.gif',
	
	'facebook_connect:requires_oauth' => 'Les services Facebook nécessitent que le plugin de bibliothèques OAuth soit activé.',

	'facebook_connect:consumer_key' => 'ID de l’application/Clé de l’API',
	'facebook_connect:consumer_secret' => 'Clé secrète',

	'facebook_connect:settings:instructions' => 'Vous devez obtenir un id d\'application et une clé secrète sur <a href="http://www.facebook.com/developers/" target="_blank">Facebook</a>. La plupart des champs sont explicites, l\'un des éléments de données dont vous aurez besoin est l\'url de rappel qui prend la forme http://[yoursite]/action/facebooklogin/return - [yoursite] est l\'URL de votre réseau Elgg.',

	'facebook_connect:usersettings:description' => "Lier votre compte %s avec Facebook.",
	'facebook_connect:usersettings:request' => "Vous devez d'abord <a href=\"%s\">autoriser</a> %s pour accéder à votre compte Facebook.",
	'facebook_connect:authorize:error' => 'Impossible d\'autoriser Facebook.',
	'facebook_connect:authorize:success' => 'L\'accès Facebook a bien été autorisé.',

	'facebook_connect:usersettings:authorized' => "Vous avez autorisé %s à accéder à votre compte Facebook : @%s.",
	'facebook_connect:usersettings:revoke' => 'Cliquez <a href="%s">ici</a> pour bloqué l\'accès.',
	'facebook_connect:revoke:success' => 'Facebook a bien été bloqué.',

	'facebook_connect:login' => 'Autoriser les utilisateurs existants qui se sont connectés à leur compte Facebook à se connecter avec Facebook ?',
	'facebook_connect:new_users' => 'Permettre aux nouveaux utilisateurs de s\'inscrire en utilisant leur compte Facebook, même si l\'enregistrement manuel est désactivé ?',
	'facebook_connect:login:success' => 'Vous avez été connecté.',
	'facebook_connect:login:error' => 'Impossible de vous connecter avec Facebook.',
	'facebook_connect:login:email' => "Vous devez entrer une adresse e-mail valide pour votre nouveau compte %.",
	'facebook_connect:email:subject' => '%s inscription réussie',
	'facebook_connect:email:body' => '
Salut %s,

Félicitations ! Vous vous êtes enregistré avec succès. Merci de venir visiter notre réseau sur %s %s.

Vos informations de connexion sont-

L\'identifiant est %s
L\'e-mail est %s
Le mot de passe est %s

Vous pouvez vous connecter en utilisant soit l\'identifiant de connexion ou soit l\'e-mail.

%s
%s'
	
	);

add_translation('fr', $french);
