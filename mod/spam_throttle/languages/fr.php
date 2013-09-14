<?php

	$french = array(
		'spam_throttle' => "Spam Throttle",
		'spam_throttle:ban' => "Banni",
		'spam_throttle:ban:explained' => "L'utilisateur est banni du site, ne peut pas s'identifier, ne peut pas afficher les contenus non-publics, ne peut pas créer de contenu",
		'spam_throttle:banned' => "Spam possible détectée, un administrateur examinera votre compte. En attendant, vous êtes banni.",
		'spam_throttle:comment' => "Commentaires",
		'spam_throttle:consequence:explanation' => "Si un utilisateur dépasse les limites, il sera signalé, mais vous pouvez également choisir ce qui se passera pour l'utilisateur.",
		'spam_throttle:consequence:title' => "Conséquences de la rupture à la limite de %s",
		'spam_throttle:delete' => "Supprimer",
		'spam_throttle:delete:explained' => "Le compte d'utilisateur est supprimé avec la totalité de son contenu. Utilisez avec précaution car la suppression ne peut pas être annulée, et une fausse alerte ne serait pas amusante...",
		'spam_throttle:deleted' => "Vous avez été identifié comme un spammeur. Votre compte et tout son contenu ont été supprimés.",
		'spam_throttle:exemptions' => "Faire des utilisateurs exemptés",
		'spam_throttle:explanation' => "Ici vous pouvez définir des limites pour la quantité et le type de contenu qu'un utilisateur
		peut créer. Les limites globales couvrent tous les types de contenu répertoriées. Par exemple, si un utilisateur poste 2 messages
		de blogue, 2 signets, et 2 commentaires en 4 minutes, puis ils ont dépassé une limite globale de 5
		créations en 5 minutes et en subiront les conséquences. Réglez les paramètres globaux
		avec assez d'indulgence, et utilisez le type de contenu spécifique limite pour être plus vigilants sur
		certains types de spam pour réduire le nombre de fausses alertes. Chaque site est différent, et il faudra
		probablement une approche par essais et erreurs pour trouver les bons réglages.
		Chaque fois qu'un utilisateur dépasse la limite, il sera communiqué aux administrateurs
		via le plugin reported_content. Ci-dessous vous pouvez définir ce qui se passe pour un utilisateur qui dépasse les limites fixées.
		Si un paramètre est laissé vide ou à 0, la limite par défaut sera celle du paramètre global (si elle est définie).",
		'spam_throttle:helptext:exemptions' => "Les administrateurs ne seront pas étranglé. Sélectionnez d'autres utilisateurs que vous souhaitez ne pas étrangler. Une fois exempté, vous ne pourez plus étrangler un utilisateur, donc traiter avec soin. Si vous utilisez le plugin speak_freely vous devriez exempter les utilisateurs anonymes.",
		'spam_throttle:global' => "Global",
		'spam_throttle:helptext:limit' => "Le nombre maximum de %s autorisé",
		'spam_throttle:helptext:reporttime' => "Rapporter les utilisateurs seulement une fois dans ce nombre d'heures (aide à garder le contenu signalé gérable si la limite est cassée à plusieurs reprises par le même utilisateur). Pour recevoir un rapport de tous les cas réglez-le sur 0.",
		'spam_throttle:helptext:time' => "Intervalle de temps en minutes",
		'spam_throttle:helptext:suspensiontime' => "Durée (en heures) pour une suspension.",
		'spam_throttle:invalid:id' => "ID utilisateur invalid",
		'spam_throttle:new_content' => "nouvel élément de contenu",
		'spam_throttle:nothing' => "Rien",
		'spam_throttle:nothing:explained' => "L'utilisateur est toujours en mesure de se connecter et créer un contenu",
		'spam_throttle:reported' => "Cet utilisateur a dépassé la limite de %s en créant %s entrées en %s minutes",
		'spam_throttle:reporttime' => "Période de rapport",
		'spam_throttle:settings' => "Paramètres de Spam Throttle",
		'spam_throttle:settings:comment' => "Limite de commentaire",
		'spam_throttle:settings:global' => "Limite globale",
		'spam_throttle:settings:notint' => "La valeur de %s doit être un entier positif, ce paramètre n'a pas été enregistré.",
		'spam_throttle:settings:success' => "Paramètres sauvegardés avec succès",
		'spam_throttle:settings:subtype' => "Limit %s",
		'spam_throttle:suspend' => "Suspendre",
		'spam_throttle:suspend:explained' => "L'utilisateur peut se connecter et visualiser le contenu avec leurs permissions normales, mais ne peut pas créer de nouveaux contenus pendant une durée fixée.",
		'spam_throttle:suspended' => "Vous êtes temporairement suspendu de poster de nouveaux contenus. Votre suspension prendra fin dans %s heures et %s minutes",
		'spam_throttle:suspensiontime' => "Durée de suspension",
		'spam_throttle:unsuspend' => "Réactiver",
		'spam_throttle:unsuspend:confirm' => "Etes-vous sûr(e) ?",
		'spam_throttle:unsuspended' => "L'utilisateur a été réactivé.",
	);
					
	add_translation("fr",$french);