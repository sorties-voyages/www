<?php
/**
 * Likes English language file
 */

$french = array(
	'likes:this' => "a aimé ça",
	'likes:deleted' => "Votre appréciation a été retiré",
	'likes:see' => "Voir ceux qui ont aimé ça",
	'likes:remove' => "N'aime pas ça",
	'likes:notdeleted' => "Il y a eu un problème, lors de la suppresion d'appréciation",
	'likes:likes' => "Vous aimez ça maintenant",
	'likes:failure' => "Il y a eu un problème d'appréciation sur cet élément",
	'likes:alreadyliked' => "Vous avez déjà porté votre appréciation ça",
	'likes:notfound' => "L'élément que vous essayez d'apprécier ne peut être trouvé",
	'likes:likethis' => "Aime ça",
	'likes:userlikedthis' => "%s aime",
	'likes:userslikedthis' => "%s aiment",
	'likes:river:annotate' => "aime",
	'likes:delete:confirm' => 'Etes-vous sûr(e) de vouloir supprimer cette appréciation ?',

	'river:likes' => "aiment %s %s",

	// notifications. yikes.
	'likes:notifications:subject' => '%s aime votre commentaire "%s"',
	'likes:notifications:body' =>
"Salut %1$s,

%2$s aime votre commentaire \"%3$s\" sur %4$s

Voir votre commentaire d'origine ici :

%5$s

ou voir le profil de %2$s ici :

%6$s

Merci,
%4$s
",

);

add_translation("fr", $french);