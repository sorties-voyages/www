<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$french = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "Pages",
	'pages:owner' => "Pages de wiki",
	'item:object:pages' => "Pages de wiki",
	'pages:friends' => "Pages des contacts ",
	'pages:all' => "Toutes les pages du site",
	'pages:add' => "Ajouter une page",

	'pages:group' => "Pages wiki ",
	'groups:enablepages' => "Autoriser les pages de Groupe",

	'pages:edit' => "Editer cette page",
	'pages:delete' => "Effacer cette page",
	'pages:history' => "Historique",
	'pages:view' => "Voir la page",
	'pages:revision' => "Révision",

	'pages:navigation' => "Navigation",
	'pages:via' => "via les pages",
	'item:object:page_top' => "Page de plus haut niveau",
	'item:object:page' => "Pages",
	'pages:nogroup' => "Ce groupe ne comporte encore aucune page",
	'pages:more' => "Plus de pages",
	'pages:none' => "Aucune page créée pour l'instant",

	/**
	* Notifications
	**/
	'pages:new' => "Une nouvelle page de wiki",
	'pages:notification' =>
'%s a créé une nouvelle page de wiki:

%s
%s

Voir cette page et la commenter:
%s
',

/**
	* River
	**/

	'river:create:object:page' => '%s a créé une page de wiki %s',
	'river:create:object:page_top' => '%s a créé une page de wiki %s',
	'river:update:object:page' => '%s a mis à jour une page de wiki %s',
	'river:update:object:page_top' => '%s a mis à jour une page de wiki %s',
	'river:comment:object:page' => '%s a commenté la page de wiki %s',
	'river:comment:object:page_top' => '%s commenté la page de wiki %s',
	/**
	 * Form fields
	 */

	'pages:title' => "Titre de la page",
	'pages:description' => "Texte de la page",
	'pages:tags' => "Tags",
	'pages:access_id' => "Accès en lecture",
	'pages:write_access_id' => "Accès en écriture",

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => "Pas d'accès à cette page",
	'pages:cantedit' => "Vous ne pouvez pas éditer cette page",
	'pages:saved' => "Pages enregistrées",
	'pages:notsaved' => "La page n'a pu être enregistrée",
	'pages:error:no_title' => "Vous devez spécifier un titre pour cette page.",
	'pages:delete:success' => "Votre page a bien été effacée.",
	'pages:delete:failure' => "Votre page n'a pu être effacée.",

	/**
	 * Page
	 */
	'pages:strapline' => "Dernière mise à jour le %s par %s",

	/**
	 * History
	 */
	'pages:revision:subtitle' => "Révision créée %s par %s",

	/**
	 * Widget
	 **/

	'pages:num' => "Nombre de pages à afficher",
	'pages:widget:description' => "Voici la liste des vos pages.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Voir la page",
	'pages:label:edit' => "Editer la page",
	'pages:label:history' => "Historique de la page",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Cette page",
	'pages:sidebar:children' => "Sous-pages",
	'pages:sidebar:parent' => "Parent",

	'pages:newchild' => "Créer une sous-page",
	'pages:backtoparent' => "Retour à '%s'",
);

add_translation("fr", $french);