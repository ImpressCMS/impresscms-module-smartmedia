<?php

/**
* $Id$
* Module: SmartMedia
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;

define("_MI_SMEDIA_MD_NAME", "SmartMedia");

// A brief description of this module
define("_MI_SMEDIA_MD_DESC", "Système de gestion de films pour votre site XOOPS");

// Config options
define("_MI_SMEDIA_ALL", "Tous");
define("_MI_SMEDIA_CAT_ON_INDEX", "Nombre maximal de cat&eacute;gories &agrave; afficher sur la page d'acceuil du module");
define("_MI_SMEDIA_CAT_ON_INDEXDSC", "");
define("_MI_SMEDIA_CLI_PER_FOL", "Nombre maximal de clips &agrave; afficher par page de dossier");
define("_MI_SMEDIA_CLI_PER_FOLDSC", "");
define("_MI_SMEDIA_DEFAULT_LANGUAGE", "Langue par d&eacute;faut");
define("_MI_SMEDIA_FOL_PER_CAT", "Nombre maximal de dossiers &agrave; afficher par page de cat&eacute;gorie");
define("_MI_SMEDIA_FOL_PER_CATDSC", "");
define("_MI_SMEDIA_INDEX_MSG", "Message d'introduction du module");
define("_MI_SMEDIA_INDEX_MSGDSC", "");
define("_MI_SMEDIA_LIST_IMG_WIDTH", "Taille des images de type 'liste'");
define("_MI_SMEDIA_LIST_IMG_WIDTHDSC", "");
define("_MI_SMEDIA_MAIN_IMG_WIDTH", "Taille des images de type 'principal'");
define("_MI_SMEDIA_MAIN_IMG_WIDTHDSC", "");
define("_MI_SMEDIA_HIGHLIGHT_COLOR", "Couleur utilisée pour surligner les mots recherchés");
define("_MI_SMEDIA_HIGHLIGHT_COLORDSC", "");

define("_MI_SMEDIA_CAT_ON_ADMIN", "Nombre maximal de cat&eacute;gories &agrave; afficher par page du coté admin");
define("_MI_SMEDIA_CAT_ON_ADMINDSC", "");
define("_MI_SMEDIA_FOLDER_ON_ADMIN", "Nombre maximal de dossiers &agrave; afficher par page de cat&eacute;gorie du coté admin");
define("_MI_SMEDIA_FOLDER_ON_ADMINDSC", "");

// Names of admin menu items
define("_MI_SMEDIA_ADMENU1", "Index");
define("_MI_SMEDIA_ADMENU2", "Cat&eacute;gories");
define("_MI_SMEDIA_ADMENU3", "Dossiers");
define("_MI_SMEDIA_ADMENU4", "Clips");
define("_MI_SMEDIA_ADMENU5", "Permissions");
define("_MI_SMEDIA_ADMENU6", "Blocs et groupes");
define("_MI_SMEDIA_ADMENU7", "Aller au module");

//Names of Blocks and Block information
define("_MI_SMEDIA_BLOCK_CLIPS_RECENT", "Liste des clips récents");
define("_MI_SMEDIA_BLOCK_CLIPS_RECENT_DSC", "");
define("_MI_SMEDIA_BLOCK_CLIPS_POPULAR", "Liste des clips populaires");
define("_MI_SMEDIA_BLOCK_CLIPS_POPULAR_DSC", "");


// About.php constants
define('_MI_SMEDIA_AUTHOR_INFO', "D&eacute;veloppeurs");
define('_MI_SMEDIA_DEVELOPER_LEAD', "Auteur");
define('_MI_SMEDIA_DEVELOPER_CONTRIBUTOR', "Contributeur(s)");
define('_MI_SMEDIA_DEVELOPER_WEBSITE', "Site Web");
define('_MI_SMEDIA_DEVELOPER_EMAIL', "Courriel");
define('_MI_SMEDIA_DEVELOPER_CREDITS', "Cr&eacute;dits");
define('_MI_SMEDIA_DEMO_SITE', "Site démo de SmartFactory");
define('_MI_SMEDIA_MODULE_INFO', "Info sur le d&eacute;veloppment du module");
define('_MI_SMEDIA_MODULE_STATUS', "&Eacute;tat");
define('_MI_SMEDIA_MODULE_RELEASE_DATE', "Date de publication");
define('_MI_SMEDIA_MODULE_DEMO', "Site d&eacute;mo");
define('_MI_SMEDIA_MODULE_SUPPORT', "Site de support officiel");
define('_MI_SMEDIA_MODULE_BUG', "Signaler un bogue dans ce module");
define('_MI_SMEDIA_MODULE_FEATURE', "Sugg&eacute;rer une nouvelle fonctionnalit&eacute; pour ce module");
define('_MI_SMEDIA_MODULE_SUBMIT_BUG', "Signaler un bug");
define('_MI_SMEDIA_MODULE_SUBMIT_FEATURE', "Proposer une fonctionnalité");
define('_MI_SMEDIA_MODULE_DISCLAIMER', "Avertissement");
define('_MI_SMEDIA_AUTHOR_WORD', "Mot de l'auteur");
define('_MI_SMEDIA_VERSION_HISTORY', "Historique des versions");
define('_MI_SMEDIA_BY', "Par");

// Beta
define('_MI_SMEDIA_WARNING_BETA', "Ce module est fourni en l'état, sans garantie d'aucune sorte. Il s'agit d'une version BETA, ce qui signifie qu'il est toujours en phase de développement intense. Cette version n'est donc fournie qu'à titre de <b>version d'essai uniquement</b> et nous déconseillons <b>fortement</b> son utilisation sur un site public ou dans un environnement de production. Son auteur ne peut être tenu responsable d'aucun problème, perte ou autre conséquence découlant de son utilisation.");

// RC
define('_MI_SMEDIA_WARNING_RC', "Ce module est fourni en l'état, sans garantie d'aucune sorte. Il s'agit d'une version RELEASE CANDIDATE, ce qui signifie qu'il est <b>fortement</b> déconseillé de l'utiliser sur un site public ou dans un environnement de production. Ce module est toujours en phase de développement. Son auteur ne peut être tenu responsable d'aucun problème, perte ou autre conséquence découlant de son utilisation.");

// Final
define('_MI_SMEDIA_WARNING_FINAL', "Ce module est fourni en l'état, sans garantie d'aucune sorte. Bien que cette version soit officielle, il est toujours en développement. Cette version peut être utilisée sur un site public ou dans un environnement de production, mais sous votre responsabilité, ce qui signifie que son auteur ne peut être tenu responsable d'aucun problème, perte ou autre conséquence découlant de son utilisation.");

?>