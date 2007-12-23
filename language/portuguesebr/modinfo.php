<?php

/**
* $Id$
* Module: SmartMedia
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// tradu��o da vers�o anterior feita por wilson - www.xoopstotal.com.br; adapta��o e revis�o desta versao
// feita por beduino [aka joao luis barroca :)]- www.xoopsbr.org - deserto2004[@]hotmail.com

// Module Info
// The name of this module
global $xoopsModule;

define("_MI_SMEDIA_MD_NAME", "SmartMedia");

// A brief description of this module
define("_MI_SMEDIA_MD_DESC", "Sistema de Gerenciamento de Multim�dia para seu site Xoops");

// Config options
define("_MI_SMEDIA_ALL", "Todos");
define("_MI_SMEDIA_CAT_ON_INDEX", "Categorias exibidas na p�gina-�ndice");
define("_MI_SMEDIA_CAT_ON_INDEXDSC", "");
define("_MI_SMEDIA_CLI_PER_FOL", "Clips exibidos em uma pasta");
define("_MI_SMEDIA_CLI_PER_FOLDSC", "");
define("_MI_SMEDIA_DEFAULT_LANGUAGE", "Linguagem padr�o");
define("_MI_SMEDIA_FOL_PER_CAT", "Pastas exibidas em uma categoria");
define("_MI_SMEDIA_FOL_PER_CATDSC", "");
define("_MI_SMEDIA_INDEX_MSG", "Texto de introdu��o exibido na p�gina-�ndice");
define("_MI_SMEDIA_INDEX_MSGDSC", "");
define("_MI_SMEDIA_LIST_IMG_WIDTH", "Largura das imagens da lista");
define("_MI_SMEDIA_LIST_IMG_WIDTHDSC", "");
define("_MI_SMEDIA_MAIN_IMG_WIDTH", "Largura das imagens principais");
define("_MI_SMEDIA_MAIN_IMG_WIDTHDSC", "");
define("_MI_SMEDIA_HIGHLIGHT_COLOR", "Cor usada para destacar palavras encontradas atrav�s da busca");
define("_MI_SMEDIA_HIGHLIGHT_COLORDSC", "");

define("_MI_SMEDIA_CAT_ON_ADMIN", "Categorias exibidas numa p�gina (interface do administrador)");
define("_MI_SMEDIA_CAT_ON_ADMINDSC", "");
define("_MI_SMEDIA_FOLDER_ON_ADMIN", "Pastas exibidas em uma categoria(interface do administrador)");
define("_MI_SMEDIA_FOLDER_ON_ADMINDSC", "");

// Names of admin menu items
define("_MI_SMEDIA_ADMENU1", "�ndice");
define("_MI_SMEDIA_ADMENU2", "Categorias");
define("_MI_SMEDIA_ADMENU3", "Pastas");
define("_MI_SMEDIA_ADMENU4", "Clips");
define("_MI_SMEDIA_ADMENU5", "Permiss�es");
define("_MI_SMEDIA_ADMENU6", "Blocos e Grupos");
define("_MI_SMEDIA_ADMENU7", "Ir para o m�dulo");

//Names of Blocks and Block information
define("_MI_SMEDIA_BLOCK_CLIPS_RECENT", "Lista de clips recentes");
define("_MI_SMEDIA_BLOCK_CLIPS_RECENT_DSC", "Lista de todos os clips");

// About.php constants
define('_MI_SMEDIA_AUTHOR_INFO', "Desenvolvedores");
define('_MI_SMEDIA_DEVELOPER_LEAD', "Desenvolvedor principal");
define('_MI_SMEDIA_DEVELOPER_CONTRIBUTOR', "Colaboradores");
define('_MI_SMEDIA_DEVELOPER_WEBSITE', "Website");
define('_MI_SMEDIA_DEVELOPER_EMAIL', "Email");
define('_MI_SMEDIA_DEVELOPER_CREDITS', "Cr�ditos");
define('_MI_SMEDIA_DEMO_SITE', "SmartFactory Demo Site");
define('_MI_SMEDIA_MODULE_INFO', "Informa��es sobre o desenvolvimento do m�dulo");
define('_MI_SMEDIA_MODULE_STATUS', "Status");
define('_MI_SMEDIA_MODULE_RELEASE_DATE', "Data da vers�o");
define('_MI_SMEDIA_MODULE_DEMO', "Site de demontra��o");
define('_MI_SMEDIA_MODULE_SUPPORT', "Site oficial de suporte");
define('_MI_SMEDIA_MODULE_BUG', "Notifica��o de bugs para este m�dulo");
define('_MI_SMEDIA_MODULE_SUBMIT_BUG', "Envie uma notifica��o de bug");
define('_MI_SMEDIA_MODULE_FEATURE', "Sugerir novos recursos para este m�dulo");
define('_MI_SMEDIA_MODULE_SUBMIT_FEATURE', "Requisi��o de fun��es extras");
define('_MI_SMEDIA_MODULE_DISCLAIMER', "Carta de ren�ncia");
define('_MI_SMEDIA_AUTHOR_WORD', "A Palavra do Autor");
define('_MI_SMEDIA_VERSION_HISTORY', "Hist�rico das Vers�es");
define('_MI_SMEDIA_BY', "Por");

// Beta
define('_MI_SMEDIA_WARNING_BETA', "Este m�dulo est� desta forma, sem qualquer garantia. 
Este m�dulo � BETA, significando que est�, ainda, em desenvolvimento ativo. Esta vers�o tem como 
<B>prop�sito ser apenas de teste</b> e n�s <b>fortemente</b> recomendamos que voc� n�o use isto em um site regular da web ou em um ambiente de produ��o.");

// RC
define('_MI_SMEDIA_WARNING_RC', "Este m�dulo est� neste est�gio, sem qualquer garantia. Este m�dulo 
e uma vers�o Release Candidate  e n�o deve ser usado em um site da Web de produ��o. O m�dulo est� ainda sob desenvolvimento ativo e seu uso est� integralmente sob sua pr�pria responsabilidade, significando que o autor n�o � respons�vel por qualquer erro ou dano.");

// Final
define('_MI_SMEDIA_WARNING_FINAL', "Este m�dulo est� neste est�gio, sem qualquer garantia. Embora 
o m�dulo n�o seja beta, est� ainda sob desenvolvimento ativo. Esta vers�o RC pode ser usada em um site da web ao vivo 
ou um ambiente de produ��o, mas seu uso est� sob sua exclusiva responsabilidade, que significa o autor n�o � respons�vel por qualquer erro ou dano.");
?>
