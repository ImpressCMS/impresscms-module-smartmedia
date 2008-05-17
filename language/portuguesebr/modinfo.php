<?php

/**
* $Id$
* Module: SmartMedia
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// tradução da versão anterior feita por wilson - www.xoopstotal.com.br; adaptação e revisão desta versao
// feita por beduino [aka joao luis barroca :)]- www.xoopsbr.org - deserto2004[@]hotmail.com

// Module Info
// The name of this module
global $xoopsModule;

define("_MI_SMEDIA_MD_NAME", "SmartMedia");

// A brief description of this module
define("_MI_SMEDIA_MD_DESC", "Sistema de Gerenciamento de Multimídia para seu site Xoops");

// Config options
define("_MI_SMEDIA_ALL", "Todos");
define("_MI_SMEDIA_CAT_ON_INDEX", "Categorias exibidas na página-índice");
define("_MI_SMEDIA_CAT_ON_INDEXDSC", "");
define("_MI_SMEDIA_CLI_PER_FOL", "Clips exibidos em uma pasta");
define("_MI_SMEDIA_CLI_PER_FOLDSC", "");
define("_MI_SMEDIA_DEFAULT_LANGUAGE", "Linguagem padrão");
define("_MI_SMEDIA_FOL_PER_CAT", "Pastas exibidas em uma categoria");
define("_MI_SMEDIA_FOL_PER_CATDSC", "");
define("_MI_SMEDIA_INDEX_MSG", "Texto de introdução exibido na página-índice");
define("_MI_SMEDIA_INDEX_MSGDSC", "");
define("_MI_SMEDIA_LIST_IMG_WIDTH", "Largura das imagens da lista");
define("_MI_SMEDIA_LIST_IMG_WIDTHDSC", "");
define("_MI_SMEDIA_MAIN_IMG_WIDTH", "Largura das imagens principais");
define("_MI_SMEDIA_MAIN_IMG_WIDTHDSC", "");
define("_MI_SMEDIA_HIGHLIGHT_COLOR", "Cor usada para destacar palavras encontradas através da busca");
define("_MI_SMEDIA_HIGHLIGHT_COLORDSC", "");

define("_MI_SMEDIA_CAT_ON_ADMIN", "Categorias exibidas numa página (interface do administrador)");
define("_MI_SMEDIA_CAT_ON_ADMINDSC", "");
define("_MI_SMEDIA_FOLDER_ON_ADMIN", "Pastas exibidas em uma categoria(interface do administrador)");
define("_MI_SMEDIA_FOLDER_ON_ADMINDSC", "");

// Names of admin menu items
define("_MI_SMEDIA_ADMENU1", "Índice");
define("_MI_SMEDIA_ADMENU2", "Categorias");
define("_MI_SMEDIA_ADMENU3", "Pastas");
define("_MI_SMEDIA_ADMENU4", "Clips");
define("_MI_SMEDIA_ADMENU5", "Permissões");
define("_MI_SMEDIA_ADMENU6", "Blocos e Grupos");
define("_MI_SMEDIA_ADMENU7", "Ir para o módulo");

//Names of Blocks and Block information
define("_MI_SMEDIA_BLOCK_CLIPS_RECENT", "Lista de clips recentes");
define("_MI_SMEDIA_BLOCK_CLIPS_RECENT_DSC", "Lista de todos os clips");

// About.php constants
define('_MI_SMEDIA_AUTHOR_INFO', "Desenvolvedores");
define('_MI_SMEDIA_DEVELOPER_LEAD', "Desenvolvedor principal");
define('_MI_SMEDIA_DEVELOPER_CONTRIBUTOR', "Colaboradores");
define('_MI_SMEDIA_DEVELOPER_WEBSITE', "Website");
define('_MI_SMEDIA_DEVELOPER_EMAIL', "Email");
define('_MI_SMEDIA_DEVELOPER_CREDITS', "Créditos");
define('_MI_SMEDIA_DEMO_SITE', "SmartFactory Demo Site");
define('_MI_SMEDIA_MODULE_INFO', "Informações sobre o desenvolvimento do módulo");
define('_MI_SMEDIA_MODULE_STATUS', "Status");
define('_MI_SMEDIA_MODULE_RELEASE_DATE', "Data da versão");
define('_MI_SMEDIA_MODULE_DEMO', "Site de demontração");
define('_MI_SMEDIA_MODULE_SUPPORT', "Site oficial de suporte");
define('_MI_SMEDIA_MODULE_BUG', "Notificação de bugs para este módulo");
define('_MI_SMEDIA_MODULE_SUBMIT_BUG', "Envie uma notificação de bug");
define('_MI_SMEDIA_MODULE_FEATURE', "Sugerir novos recursos para este módulo");
define('_MI_SMEDIA_MODULE_SUBMIT_FEATURE', "Requisição de funções extras");
define('_MI_SMEDIA_MODULE_DISCLAIMER', "Carta de renúncia");
define('_MI_SMEDIA_AUTHOR_WORD', "A Palavra do Autor");
define('_MI_SMEDIA_VERSION_HISTORY', "Histórico das Versões");
define('_MI_SMEDIA_BY', "Por");

// Beta
define('_MI_SMEDIA_WARNING_BETA', "Este módulo está desta forma, sem qualquer garantia. 
Este módulo é BETA, significando que está, ainda, em desenvolvimento ativo. Esta versão tem como 
<B>propósito ser apenas de teste</b> e nós <b>fortemente</b> recomendamos que você não use isto em um site regular da web ou em um ambiente de produção.");

// RC
define('_MI_SMEDIA_WARNING_RC', "Este módulo está neste estágio, sem qualquer garantia. Este módulo 
e uma versão Release Candidate  e não deve ser usado em um site da Web de produção. O módulo está ainda sob desenvolvimento ativo e seu uso está integralmente sob sua própria responsabilidade, significando que o autor não é responsável por qualquer erro ou dano.");

// Final
define('_MI_SMEDIA_WARNING_FINAL', "Este módulo está neste estágio, sem qualquer garantia. Embora 
o módulo não seja beta, está ainda sob desenvolvimento ativo. Esta versão RC pode ser usada em um site da web ao vivo 
ou um ambiente de produção, mas seu uso está sob sua exclusiva responsabilidade, que significa o autor não é responsável por qualquer erro ou dano.");
?>