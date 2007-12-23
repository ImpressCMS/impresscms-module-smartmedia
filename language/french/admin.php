<?php

/**
* $Id$
* Module: SmartMedia
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
* French
*/

define("_AM_SMEDIA_ABOUT", "&Agrave; propos");
define("_AM_SMEDIA_ACTION", "Action");
define("_AM_SMEDIA_ALL", "Tout");
define("_AM_SMEDIA_ALL_EXP", "<b>Tout</b> (tous les articles du module, ind&eacute;pendamment de leur &eacute;tat.");
define("_AM_SMEDIA_ASC", "Ascendant");
define("_AM_SMEDIA_AVAILABLE", "<span style='font-weight: bold; color: green;'>OK</span>");
define("_AM_SMEDIA_BACK2IDX", "Annul&eacute;. Retour &agrave; l'index.");
define("_AM_SMEDIA_BLOCKS", "Gestion des blocs");
define("_AM_SMEDIA_BLOCKSTXT", "Ce module comprend les blocs suivants, que vous pouvez configurer ici ou via le module Syst&egrave;me.");
define("_AM_SMEDIA_BLOCKSANDGROUPS", "Blocs et groupes");
define("_AM_SMEDIA_BLOCKSGROUPSADMIN", "Gestion des groupes");
define("_AM_SMEDIA_BY", "par");
define("_AM_SMEDIA_CANCEL", "Annuler");
define("_AM_SMEDIA_CATCREATED", "La nouvelle cat&eacute;gorie a &eacute;t&eacute; cr&eacute;&eacute;e et sauvegard&eacute;e!");

// Catégories

define("_AM_SMEDIA_CATEGORIES_DSC", "Voici la liste de toutes les cat&eacute;gories actuellement disponibles.");
define("_AM_SMEDIA_CATEGORIES_TITLE", "Cat&eacute;gories courantes");
define("_AM_SMEDIA_CATEGORY", "Cat&eacute;gorie");
define("_AM_SMEDIA_CATEGORY_ADD", "Ajouter ce dossier &agrave; ");
define("_AM_SMEDIA_CATEGORY_CANNOT_DELETE_HAS_CHILD", "Au moins un dossier est lié à cette catégorie.<br/>Veuillez supprimer tous les dossiers liés avant de supprimer cette catégorie.");
define("_AM_SMEDIA_CATEGORY_CHANGE", "Changer la catégorie de ce dossier pour");
define("_AM_SMEDIA_CATEGORY_CREATE", "Nouvelle cat&eacute;gorie");
define("_AM_SMEDIA_CATEGORY_CREATE_INFO", "Remplissez ce formulaire pour cr&eacute;er une nouvelle cat&eacute;gorie.<br />Celle-ci appara&#238;tra automatiquement dans l'interface utilisateur.");
define("_AM_SMEDIA_CATEGORY_EDIT_INFO", "Vous pouvez &eacute;diter cette cat&eacute;gorie. Vos modifications prendront effet imm&eacute;diatement dans l'interface utilisateur.");
define("_AM_SMEDIA_CATEGORY_FOLDER", "Cat&eacute;gorie -> Dossiers");
define("_AM_SMEDIA_CATEGORY_LANGUAGE_INFO_EDITING", "&Eacute;dition des variables linguistiques de la cat&eacute;gorie");
define("_AM_SMEDIA_CATEGORY_LANGUAGE_INFO_EDITING_INFO", "Remplissez ce formulaire afin de configurer les textes pour la langue s&eacute;lectionn&eacute;e.");
define("_AM_SMEDIA_CATEGORY_TEXT_CREATE", "Ajouter une langue");
define("_AM_SMEDIA_CATEGORY_TITLE", "Nom de la cat&eacute;gorie");
define("_AM_SMEDIA_CATEGORY_SAVE_ERROR", "La sauvegarde de la cat&eacute;gorie a entrain&eacute; des erreurs. En voici la liste :");
define("_AM_SMEDIA_CATEGORY_REQ", "Nom de la cat&eacute;gorie*");

define("_AM_SMEDIA_CLEAR", "Effacer");
define("_AM_SMEDIA_COLDESCRIPT", "Description de la cat&eacute;gorie");
define("_AM_SMEDIA_COLDESCRIPTDSC", "Cette description apparaîtra au listage des catégories.");
define("_AM_SMEDIA_COLISDELETED", "Cette cat&eacute;gorie %s a &eacute;t&eacute; supprim&eacute;e");
define("_AM_SMEDIA_COLMODIFIED", "La cat&eacute;gorie a été modifiée.");
define("_AM_SMEDIA_COLPOSIT", "Poids de la cat&eacute;gorie (ordre)");
define("_AM_SMEDIA_CATEGORIES", "Cat&eacute;gories");
define("_AM_SMEDIA_CREATE", "Cr&eacute;er");
define("_AM_SMEDIA_CREATED", "Cr&eacute;&eacute;e");
define("_AM_SMEDIA_CREATETHEDIR", "Cr&eacute;er le dossier");
define("_AM_SMEDIA_CREATINGNEW", "Cr&eacute;er nouveau");


// Upgrade Database constants

define('_AM_SMEDIA_DB_CHECKTABLES', 'Vérifier tables');
define('_AM_SMEDIA_DB_CURRENTVER', 'Version courante: <span class="currentVer">%s</span>');
define('_AM_SMEDIA_DB_DBVER', 'Version de la base de données <span class="dbVer">%s</span>');
define('_AM_SMEDIA_DB_NOUPDATE', 'La base de données est à jour.');
define('_AM_SMEDIA_DB_NEEDUPDATE', "Votre base de donnée n'est pas à jour. Procédez à la mise-à-jour des tables S.V.P!<br><b>Note : La SmartFactory vous recommande fortement de procéder à une sauvegarde des tables de SmartSection avant d'éxécuter le script de mise-à-jour.</b><br>");
define('_AM_SMEDIA_DB_UPDATE_NOW', "Mettre à jour");
define('_AM_SMEDIA_DB_NEEDINSTALL', "Votre base de donnée n'est pas celle qui correspond à la version installée du module. S.V.P, installer la bonne version du module");
define('_AM_SMEDIA_DB_VERSION_ERR', 'Impossible de déterminer la version précédente.');
define('_AM_SMEDIA_DB_MSG_MODIFYTABLE', 'Table modifiée %s');
define('_AM_SMEDIA_DB_MSG_MODIFYTABLE_ERR', 'Erreur(s) à la modification de la table %s');
define('_AM_SMEDIA_DB_MSG_ADDFIELD', 'Ajout des champs %s dans la table %s');
define('_AM_SMEDIA_DB_MSG_ADDFIELD_ERR', "Erreur(s) à l'ajout des champs %s dans la table %s");
define('_AM_SMEDIA_DB_MSG_DROPFIELD', 'Suppression du champs %s dans la table %s');
define('_AM_SMEDIA_DB_MSG_DROPFIELD_ERR', 'Erreur(s) à la suppression du champs %s dans la table %s');

define('_AM_SMEDIA_DB_MSG_UPDATE_TABLE', 'Enregistrement mis à jour dans la table %s');
define('_AM_SMEDIA_DB_MSG_UPDATE_TABLE_ERR', "Erreur(s) à la mise-à-jour de l'enregistrement dans la table %s");
define('_AM_SMEDIA_DB_MSG_CREATE_TABLE', 'Table %s créée');
define('_AM_SMEDIA_DB_MSG_CREATE_TABLE_ERR', 'Erreur(s) à la création de la table %s');
define('_AM_SMEDIA_DB_MSG_ADD_DATA', 'Données ajoutées dans la table %s');
define('_AM_SMEDIA_DB_MSG_ADD_DATA_ERR', "Erreur(s) à l'ajout de données dans la table %s");
define('_AM_SMEDIA_DB_UPDATE_DB', 'Mise-à-jour de la base de données');
define('_AM_SMEDIA_DB_UPDATE_TO', 'Mise-à-jour vers la version %s');
define('_AM_SMEDIA_DB_UPDATE_OK', 'La mise-à-jour vers la version %s a été éxécutée avec succès!');
define('_AM_SMEDIA_DB_UPDATE_ERR', 'Erreur(s) lors de la mise-à-jour vers la version %s');
define('_AM_SMEDIA_DB_MSG_DROP_TABLE', 'La table %s a été supprimée de la base de donnée.');
define('_AM_SMEDIA_DB_MSG_DROP_TABLE_ERR', "Erreur(s): la table %s n'a pas été supprimée de la base de données.");
define('_AM_SMEDIA_DB_MSG_RENAME_TABLE', 'La table %s a été renommée %s.');
define('_AM_SMEDIA_DB_MSG_RENAME_TABLE_ERR', "Erreur(s): table %s n'a pas été renommée.");


define("_AM_SMEDIA_DELETE", "Supprimer");
define("_AM_SMEDIA_DELETEITEM", "Supprimer cet article");
define("_AM_SMEDIA_DELETE_CAT_CONFIRM", "Attention: en supprimant une cat&eacute;gorie, vous supprimerez &eacute;galement les sous-cat&eacute;gories, dossiers, clips et commentaires qu'elle contient. &Ecirc;tes-vous certain de vouloir supprimer tous ces contenus&nbsp;?");
define("_AM_SMEDIA_DELETE_CAT_ERROR", "La suppression de cette  cat&eacute;gorie a entra&#238;n&eacute; une erreur.");
define("_AM_SMEDIA_DELETE_CAT_SUCCESS", "Ces variables linguistiques ont &eacute;t&eacute; supprim&eacute;es.");
define("_AM_SMEDIA_DELETE_CAT_TEXT", "Voulez-vous supprimer ces variables linguistiques&nbsp;?");
define("_AM_SMEDIA_DELETE_CAT_TEXT_ERROR", "La suppression de ces variables linguistiques a entra&#238;n&eacute; une erreur.");
define("_AM_SMEDIA_DELETECOL", "Supprimer la cat&eacute;gorie");
define("_AM_SMEDIA_DESC", "Descendant");
define("_AM_SMEDIA_DESCRIP", "Description de la cat&eacute;gorie");
define("_AM_SMEDIA_DESCRIPTION", "Description");
define("_AM_SMEDIA_DIRCREATED", "La dossier a &eacute;t&eacute; cr&eacute;&eacute;");
define("_AM_SMEDIA_DIRNOTCREATED", "La dossier n'a pas pu &eacute;t&eacute; cr&eacute;&eacute; ");
define("_AM_SMEDIA_DISPLAY_LIMIT", "Afficher");
define("_AM_SMEDIA_DOHTML", " Activer les codes HTML");
define("_AM_SMEDIA_DOIMAGE", " Activer les images");
define("_AM_SMEDIA_DOLINEBREAK", " Activer les sauts de ligne");
define("_AM_SMEDIA_DOSMILEY", " Activer les binettes");
define("_AM_SMEDIA_DOXCODE", " Activer les codes XOOPS");
define("_AM_SMEDIA_EDITCOL", "Modifier la cat&eacute;gorie");
define("_AM_SMEDIA_EDITING", "&Eacute;dition");
define("_AM_SMEDIA_ERROR", " Une erreur s'est produite.");

// Clips 
define("_AM_SMEDIA_CLIP_BLOCK_TITLE", "Titre dans le bloc");
define("_AM_SMEDIA_CLIP_BLOCK_TITLE_DSC", "Titre du clip dans le bloc Liste des Clips.");
define("_AM_SMEDIA_CLIP", "Clip");
define("_AM_SMEDIA_CLIP_CREATE", "Nouveau clip");
define("_AM_SMEDIA_CLIP_CREATED", "Le clip a &eacute;t&eacute; cr&eacute;&eacute;.");
define("_AM_SMEDIA_CLIP_CREATE_INFO", "Remplissez ce formulaire pour cr&eacute;er un nouveau clip.");
define("_AM_SMEDIA_CLIP_DELETE", "Supprimer le clip");
define("_AM_SMEDIA_CLIP_DELETE_ERROR", "La suppression du clip a entra&#238;n&eacute; une erreur.");
define("_AM_SMEDIA_CLIP_DELETE_SUCCESS", "Ce clip a &eacute;t&eacute; supprim&eacute;.");
define("_AM_SMEDIA_CLIP_DESCRIPTION", "Description");
define("_AM_SMEDIA_CLIP_DESCRIPTIONDSC", "Description qui sera affichée pour ce clip au listage du dossier le contenant");
define("_AM_SMEDIA_CLIP_EDIT", "Modifier le clip");
define("_AM_SMEDIA_CLIP_EDIT_INFO", "Vous pouvez modifier ce clip. Les modifications prendront effet immediatement dans l'interface utilisateur.");
define("_AM_SMEDIA_CLIP_FILE_LR", "URL du clip (basse r&eacute;solution)");
define("_AM_SMEDIA_CLIP_FILE_LRDSC", "Clip qui sera disponible à même le module.");
define("_AM_SMEDIA_CLIP_FILE_HR", "URL du clip (haute r&eacute;solution)");
define("_AM_SMEDIA_CLIP_FILE_HRDSC", "Sera visible via un lien dans sa version plein format.");
define("_AM_SMEDIA_CLIP_FORMAT", "Format du clip");
define("_AM_SMEDIA_CLIP_IMAGE_HR", "Image");
define("_AM_SMEDIA_CLIP_IMAGE_HR_DSC", "Image symbolisant ce clip (largeur recommand&eacute;e&nbsp;: %spx)");
define("_AM_SMEDIA_CLIP_IMAGE_HR_UPLOAD", "Téléverser une image");
define("_AM_SMEDIA_CLIP_IMAGE_HR_UPLOAD_DSC", "Choisissez une image sur votre ordinateur. Elle sera t&eacute;l&eacute;vers&eacute;e sur le site et configur&eacute;e comme image haute r&eacute;solution de ce clip.");
define("_AM_SMEDIA_CLIP_IMAGE_LR", "Image basse r&eacute;solution");
define("_AM_SMEDIA_CLIP_IMAGE_LR_DSC", "Petite image symbolisant ce clip.");
define("_AM_SMEDIA_CLIP_IMAGE_LR_UPLOAD", "Téléverser l'image basse r&eacute;solution");
define("_AM_SMEDIA_CLIP_IMAGE_LR_UPLOAD_DSC", "S&eacute;lectionnez une image sur votre ordinateur. Elle sera t&eacute;l&eacute;vers&eacute;e sur le site et configur&eacute;e comme image basse r&eacute;solution de ce clip.");
define("_AM_SMEDIA_CLIP_LANGUAGE_INFO_EDITING", "&Eacute;ditez les texte de ce clip dans la langue d&eacute;lectionn&eacute;e");
define("_AM_SMEDIA_CLIP_LANGUAGE_INFO_EDITING_INFO", "Remplissez ce formulaire pour configurer les textes de ce clip pour la langue s&eacute;lectionn&eacute;e.");
define("_AM_SMEDIA_CLIP_META_DESCRIPTION", "Méta-balise Description");
define("_AM_SMEDIA_CLIP_META_DESCRIPTIONDSC", "Description qui sera visible pour les moteurs de recherche web");
define("_AM_SMEDIA_CLIP_MODIFIED", "Le clip a &eacute;t&eacute; modifi&eacute;e.");
define("_AM_SMEDIA_CLIP_PRESENTATION_FILE", "Fichier de présentation");
define("_AM_SMEDIA_CLIP_PRESENTATION_FILE_DSC", "Veuillez noter que si vous utilisez un fichier de présentation, vous ne pourrez utiliser les onglets défini ci-bas.");
define("_AM_SMEDIA_CLIP_PRESENTATION_FORMATID", "Format du fichier de présentation");
define("_AM_SMEDIA_CLIP_SAVE_ERROR", "La sauvegarde du clip a entra&#238;n&eacute; une erreur.");
define("_AM_SMEDIA_CLIP_SHORT_TITLE", "Titre court");
define("_AM_SMEDIA_CLIP_SUMMARY", "Sommaire");
define("_AM_SMEDIA_CLIP_TAB_CAPTION_1", "L&eacute;gende de l'onglet 1");
define("_AM_SMEDIA_CLIP_TAB_CAPTION_2", "L&eacute;gende de l'onglet 2");
define("_AM_SMEDIA_CLIP_TAB_CAPTION_3", "L&eacute;gende de l'onglet 3");
define("_AM_SMEDIA_CLIP_TAB_TEXT_1", "Texte de l'onglet 1");
define("_AM_SMEDIA_CLIP_TAB_TEXT_2", "Texte de l'onglet 2");
define("_AM_SMEDIA_CLIP_TAB_TEXT_3", "Texte de l'onglet 3");
define("_AM_SMEDIA_CLIP_TABDSC", "Vous disposez de trois onglets pour ajouter des informations au clip. Ces onglets seront visibles à coté du clip dans sa version basse résolution.");
define("_AM_SMEDIA_CLIP_TEXT_CREATE", "Ajouter une langue");
define("_AM_SMEDIA_CLIP_TEXT_DELETE", "Voulez-vous supprimer ces variables linguistiques&nbsp;?");
define("_AM_SMEDIA_CLIP_TEXT_DELETE_ERROR", "La suppression de ces variables linguistiques a entra&#238;n&eacute; une erreur.");
define("_AM_SMEDIA_CLIP_TEXT_DELETE_SUCCESS", "Ces variables linguistiques ont &eacute;t&eacute; supprim&eacute;es.");
define("_AM_SMEDIA_CLIP_TITLE", "Titre");
define("_AM_SMEDIA_CLIP_TITLE_REQ", "Titre*");
define("_AM_SMEDIA_CLIP_WEIGHT", "Poids");
define("_AM_SMEDIA_CLIPS", "Clips");
define("_AM_SMEDIA_CLIPS_ALL", "Tous les clips");
define("_AM_SMEDIA_CLIPS_ALL_DSC", "Voici la liste de tous les clips actuellement disponibles.");
define("_AM_SMEDIA_CLIPS_DSC", "Voici la liste de tous les clips dans le dossier %s.");
define("_AM_SMEDIA_CLIPS_TITLE", "Clips disponibles");
define("_AM_SMEDIA_CLIPS_WITHIN_FOLDER", "Clips du dossier <b><i>%s</i></b>");

define("_AM_SMEDIA_CLIP_WIDTH", "Largeur du clip");
define("_AM_SMEDIA_CLIP_WIDTHDSC", "");	
define("_AM_SMEDIA_CLIP_HEIGHT", "Hauteur du clip");
define("_AM_SMEDIA_CLIP_HEIGHTDSC", "");
define("_AM_SMEDIA_EDIT", "Edit");

// Dossiers

define("_AM_SMEDIA_FOLDER", "Dossier");
define("_AM_SMEDIA_FOLDER_CANNOT_DELETE_HAS_CHILD", "Au moins un clip est lié à ce dossier.<br/>Veuillez supprimer tous les clips liés avant de supprimer ce dossier.");
define("_AM_SMEDIA_FOLDER_CLIP", "Dossier -> Clip");
define("_AM_SMEDIA_FOLDER_CREATE", "Nouveau dossier");
define("_AM_SMEDIA_FOLDER_CREATED", "Le dossier a &eacute;t&eacute; cr&eacute;&eacute;.");
define("_AM_SMEDIA_FOLDER_CREATE_INFO", "Remplissez ce formulaire pour cr&eacute;er un nouveau dossier.");
define("_AM_SMEDIA_FOLDER_DELETE", "Supprimer le dossier");
define("_AM_SMEDIA_FOLDER_DELETE_ERROR", "La suppression du dossier a entra&#238;n&eacute; une erreur.");
define("_AM_SMEDIA_FOLDER_DELETE_SUCCESS", "Le dossier a &eacute;t&eacute; supprim&eacute;.");
define("_AM_SMEDIA_FOLDER_DESCRIPTION", "Description");
define("_AM_SMEDIA_FOLDER_DESCRIPTIONDSC", "Cette description sera affichée dans le haut de la page du dossier");
define("_AM_SMEDIA_FOLDER_EDIT", "Modifier le dossier");
define("_AM_SMEDIA_FOLDER_EDIT_INFO", "Vous pouvez modifier ce dossier. Les modifications prendront imm&eacute;diatement effet dans l'interface utilisateur.");
define("_AM_SMEDIA_FOLDER_IMAGE_HR", "Image");
define("_AM_SMEDIA_FOLDER_IMAGE_HR_DSC", "Image symbolisant ce dossier (largeur recommand&eacute;e&nbsp;: %spx)");
define("_AM_SMEDIA_FOLDER_IMAGE_HR_UPLOAD", "Téléverser une image");
define("_AM_SMEDIA_FOLDER_IMAGE_HR_UPLOAD_DSC", "Choisissez une image sur votre ordinateur. Elle sera t&eacute;l&eacute;vers&eacute;e sur le site et configur&eacute;e comme image haute r&eacute;solution de ce dossier.");
define("_AM_SMEDIA_FOLDER_IMAGE_LR", "Image basse r&eacute;solution");
define("_AM_SMEDIA_FOLDER_IMAGE_LR_DSC", "Image basse r&eacute;solution symbolisant ce dossier.");
define("_AM_SMEDIA_FOLDER_IMAGE_LR_UPLOAD", "T&eacute;l&eacute;verser une image basse r&eacute;solution");
define("_AM_SMEDIA_FOLDER_IMAGE_LR_UPLOAD_DSC", "Choisissez une image sur votre ordinateur. Elle sera t&eacute;l&eacute;vers&eacute;e sur le site et configur&eacute;e comme image basse r&eacute;solution de ce dossier.");
define("_AM_SMEDIA_FOLDER_LANGUAGE_INFO_EDITING", "&Eacute;dition des variables linguistique du dossier");
define("_AM_SMEDIA_FOLDER_LANGUAGE_INFO_EDITING_INFO", "Remplissez ce formulaire afin de configurer les textes pour la langue s&eacute;lectionn&eacute;e.");
define("_AM_SMEDIA_FOLDER_META_DESCRIPTION", "Méta-balise Description");
define("_AM_SMEDIA_FOLDER_MODIFIED", "Le dossier a &eacute;t&eacute; modifi&eacute;.");
define("_AM_SMEDIA_FOLDER_SAVE_ERROR", "La sauvegarde du dossier a entrain&eacute; des erreurs.");
define("_AM_SMEDIA_FOLDER_SHORT_TITLE", "Titre court");
define("_AM_SMEDIA_FOLDER_SHOW_CLIP", "Voir les clips");
define("_AM_SMEDIA_FOLDER_STATUS", "&Eacute;tat");
define("_AM_SMEDIA_FOLDER_SUMMARY", "Sommaire");
define("_AM_SMEDIA_FOLDER_SUMMARYDSC", "Description qui sera affichée pour ce dossier au listage de la catégorie le contenant");
define("_AM_SMEDIA_FOLDER_TEXT_CREATE", "Ajouter une langue");
define("_AM_SMEDIA_FOLDER_TEXT_DELETE", "Voulez-vous supprimer ces variables linguistiques&nbsp;?");
define("_AM_SMEDIA_FOLDER_TEXT_DELETE_ERROR", "La suppression de ces variables linguistiques a entra&#238;n&eacute; une erreur.");
define("_AM_SMEDIA_FOLDER_TEXT_DELETE_SUCCESS", "Ces variables linguistiques ont &eacute;t&eacute; supprim&eacute;es.");
define("_AM_SMEDIA_FOLDER_TITLE", "Titre");
define("_AM_SMEDIA_FOLDER_TITLE_REQ", "Titre*");
define("_AM_SMEDIA_FOLDER_WEIGHT", "Poids");
define("_AM_SMEDIA_FOLDERS", "Dossiers");
define("_AM_SMEDIA_FOLDERS_DSC", "Voici la liste de tous les dossiers actuellement disponibles.");
define("_AM_SMEDIA_FOLDERS_TITLE", "Dossiers existants");

// FORMAT

define("_AM_SMEDIA_FORMAT", "Format");
define("_AM_SMEDIA_FORMAT_CREATE", "Créer un format");
define("_AM_SMEDIA_FORMAT_CREATE_ERROR", "Une erreur est survenue lors de la création de ce format.");
define("_AM_SMEDIA_FORMAT_CREATE_SUCCESS", "Le format a été créé avec succès.");
define("_AM_SMEDIA_FORMAT_DSC", "***à venir");
define("_AM_SMEDIA_FORMAT_EDITING", "Modifier le format d'un clip");
define("_AM_SMEDIA_FORMAT_EDITING_INFO", "Vous pouvez modifier le format d'un clip. Remplissez simplement le formulaire suivant.");
define("_AM_SMEDIA_FORMAT_EXT", "Extension");
define("_AM_SMEDIA_FORMAT_EXT_DSC", "***à venir");
define("_AM_SMEDIA_FORMAT_CREATING", "Création d'un format");
define("_AM_SMEDIA_FORMAT_CREATING_INFO", "Vous pouvez créer un format de clip. Remplissez simplement le formulaire suivant.");
define("_AM_SMEDIA_FORMAT_DELETE_ERROR", "Une erreur est survenue lors de la supression de ce format.");
define("_AM_SMEDIA_FORMAT_DELETE_CONFIRM", "voulez-vous vraiment effacer ce format?");
define("_AM_SMEDIA_FORMAT_DELETE_SUCCESS", "Le format a été effacé avec succès.");
define("_AM_SMEDIA_FORMAT_EDIT_ERROR", "Une erreur est survenue lors de la modification de ce format.");
define("_AM_SMEDIA_FORMAT_EDIT_SUCCESS", "Le format a été modifié avec succès.");
define("_AM_SMEDIA_FORMAT_TEMPLATE", "Template");
define("_AM_SMEDIA_FORMAT_TEMPLATE_DSC", "***à venir");
define("_AM_SMEDIA_FORMATS", "Formats de Clip");
define("_AM_SMEDIA_FORMATS_TITLE", "Formats de Clip");
define("_AM_SMEDIA_FORMATS_TITLE_INFO", "Voici la liste des formats de clip disponibles dans ce module. Vous pouvez ajouter, modifier ou effacer des formats.");




define("_AM_SMEDIA_DEFAULT_LANGUAGE", "Langue par défaut");
define("_AM_SMEDIA_DEFAULT_LANGUAGE_DSC", "Ceci est la langue par défaut de cet article");
define("_AM_SMEDIA_IMAGE", "Image de la cat&eacute;gorie");
define("_AM_SMEDIA_IMAGE_DSC", "Image symbolisant cette cat&eacute;gorie (largeur recommand&eacute;e&nbsp;: %s px)");
define("_AM_SMEDIA_IMAGE_UPLOAD", "Téléverser une image");
define("_AM_SMEDIA_IMAGE_UPLOAD_DSC", "Choisissez une image sur votre ordinateur. Elle sera t&eacute;l&eacute;vers&eacute;e sur le site et configur&eacute;e comme image haute r&eacute;solution de cette cat&eacute;gorie.");
define("_AM_SMEDIA_ITEM_EDIT", "Modifier");
define("_AM_SMEDIA_ITEM", "Article");
define("_AM_SMEDIA_ITEMS", "Articles");
define("_AM_SMEDIA_GOMOD", "Aller au module");
define("_AM_SMEDIA_GROUPS", "Gestion des groupes");
define("_AM_SMEDIA_GROUPSINFO", "Configurer les permissions applicables au module et aux blocs pour chaque groupe");
define("_AM_SMEDIA_HELP", "Aide");
define("_AM_SMEDIA_HITS", "Requêtes");
define("_AM_SMEDIA_ID", "ID");
define("_AM_SMEDIA_INDEX", "Index");
define("_AM_SMEDIA_INVENTORY", "Sommaire du module");
define("_AM_SMEDIA_ITEMCATEGORYNAME", "Cat&eacute;gorie");
define("_AM_SMEDIA_ITEMID", "ID");
define("_AM_SMEDIA_LANGUAGE", "Langue");
define("_AM_SMEDIA_LANGUAGE_INFO", "Langue");
define("_AM_SMEDIA_LANGUAGE_ITEM", "Langue par défaut de cet item");
define("_AM_SMEDIA_LANGUAGE_ITEM_DSC", "Langue dans laquelle seront affichées les informations de cet item en l'abscence d'une traduction dans la langue de l'utilisateur.<br>Vous pouvez ajouter une traduction en cliquant sur 'Ajouter une langue' dans la section de modification de l'item, après sa création. Le module 'SmartLanguage' est requis pour cette fonctionnalité.");
define("_AM_SMEDIA_LANGUAGE_NEW", "Langue de la traduction");
define("_AM_SMEDIA_LANGUAGE_NEW_DSC", "Les information que vous vous apprêtez à entrer seront affichées quand un utilisateur sélectionnera cette langue.");
define("_AM_SMEDIA_MODADMIN", "Administration du module :");
define("_AM_SMEDIA_MODIFY", "Modifier");
define("_AM_SMEDIA_MODIFYCAT", "Modifier la cat&eacute;gorie");
define("_AM_SMEDIA_MODIFYTHISCAT", "Voulez-vous modifier cette cat&eacute;gorie?");
define("_AM_SMEDIA_NO", "No");
define("_AM_SMEDIA_NOFOUND", "Il n'existe pas d'utilisateur correspondant &agrave; cette cha&#238;ne.");
define("_AM_SMEDIA_NONE", "Aucun");
define("_AM_SMEDIA_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>Non disponible</span>");
define("_AM_SMEDIA_NOCAT", "Il n'existe pas de cat&eacute;gorie correspondante");
define("_AM_SMEDIA_NOCOLTOEDIT", "Il n'existe pas de cat&eacute;gorie &agrave; modifier!");
define("_AM_SMEDIA_NO_LANGUAGE_INFO", "Il n'y a pas d'information linguistique &agrave; modifier");
define("_AM_SMEDIA_NOTUPDATED", "La mise &agrave; jour de la base de donn&eacute;es a entra&#238;n&eacute; une erreur!");
define("_AM_SMEDIA_OFFLINE", "Hors ligne");
define("_AM_SMEDIA_OPTIONS", "Options");
define("_AM_SMEDIA_OPTS", "Pr&eacute;f&eacute;rences");
define("_AM_SMEDIA_PARENT_CATEGORY_EXP", "Cat&eacute;gorie parente : <span style='font-size: xx-small; font-weight: normal; display: block;'>Cette cat&eacute;gorie est-elle une sous-cat&eacute;gorie&nbsp;?<br />Si oui, choisissez la  cat&eacute;gorie qui<br />contient cette sous-cat&eacute;gorie.</span>");
define("_AM_SMEDIA_PATH", "Chemin");
define("_AM_SMEDIA_PATH_ITEM", "T&eacute;leverser les articles");
define("_AM_SMEDIA_PATH_FILES", "Fichiers attach&eacute;s");
define("_AM_SMEDIA_PATH_IMAGES", "Images g&eacute;n&eacute;rales");
define("_AM_SMEDIA_PATH_IMAGES_CATEGORY", "Images des cat&eacute;gories");
define("_AM_SMEDIA_PATH_IMAGES_FOLDER", "Images des dossiers");
define("_AM_SMEDIA_PATH_IMAGES_CLIP", "Images des clips");
define("_AM_SMEDIA_PATHCONFIGURATION", "Configuration des chemins du module");
define("_AM_SMEDIA_PERSISTENT_INFO", "Ces informations ne sont pas fonction de la langue");
define("_AM_SMEDIA_PUBLISH", "Publier");
define("_AM_SMEDIA_PUBLISHED", "Publi&eacute;");
define("_AM_SMEDIA_SELECT_SORT", "Ordre de tri");
define("_AM_SMEDIA_SELECT_STATUS", "&Eacute;tat");
define("_AM_SMEDIA_SHOWING", "Affichage: ");
define("_AM_SMEDIA_SORT", "Trier par");
define("_AM_SMEDIA_TITLE", "Titre");
define("_AM_SMEDIA_TOTALCLIPS", "Clips :");
define("_AM_SMEDIA_TOTALFOLDERS", "Dossiers :");
define("_AM_SMEDIA_TOTALCAT", "Cat&eacute;gories :");
define("_AM_SMEDIA_UPLOAD", "T&eacute;l&eacute;verser");
define('_AM_SMEDIA_UPDATE_MODULE', "Mise-à-jour du module");
define("_AM_SMEDIA_UID", "&Eacute;diteur");
define("_AM_SMEDIA_UID_DSC", "Choisissez le nom de l'&eacute;diteur");
define("_AM_SMEDIA_VIEW_CATS", "S&eacute;lectionnez les cat&eacute;gories que chaque groupe peut visualiser");
define("_AM_SMEDIA_WEIGHT", "Poids");
define("_AM_SMEDIA_YES", "Oui");

// New table
define("_AM_SMEDIA_ITEMCAT", "Cat&eacute;gorie");
define("_AM_SMEDIA_STATUS", "&Eacute;tat");

define("_AM_SMEDIA_CLIP_", "Résolution du clip");
define('_AM_SMEDIA_FORMATS', "Format des clips");

?>
