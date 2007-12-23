<?php

/**
* $Id$
* Module: SmartMedia
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
// tradu��o da vers�o anterior feita por wilson - www.xoopstotal.com.br; adapta��o e revis�o desta versao
// feita por beduino [aka joao luis barroca :)]- www.xoopsbr.org - deserto2004[@]hotmail.com

define("_AM_SMEDIA_ABOUT", "Sobre");
define("_AM_SMEDIA_ACTION", "A��o");
define("_AM_SMEDIA_ALL", "Todos");
define("_AM_SMEDIA_ALL_EXP", "<b>Status geral</b> :Todos os itens do m�dulo, seja qual for seu status.");
define("_AM_SMEDIA_ASC", "Ascendente");
define("_AM_SMEDIA_AVAILABLE", "<span style='font-weight: bold; color: green;'>Dispon�vel</span>");
define("_AM_SMEDIA_BACK2IDX", "Cancelado. Redirecionando ao index");
define("_AM_SMEDIA_BLOCKS", "Gerenciamento dos blocos");
define("_AM_SMEDIA_BLOCKSTXT", "Blocos do m�dulo. Podem ser configurados aqui ou atrav�s do m�dulo System.");
define("_AM_SMEDIA_BLOCKSANDGROUPS", "Grupos");
define("_AM_SMEDIA_BLOCKSGROUPSADMIN", "Gerenciamento dos blocos e grupos");
define("_AM_SMEDIA_BY", "por");
define("_AM_SMEDIA_CANCEL", "Cancelar");
define("_AM_SMEDIA_CATCREATED", "Nova categoria criada e salva!");

// Categories

define("_AM_SMEDIA_CATEGORIES_DSC", "Listagem de todas as categorias.");
define("_AM_SMEDIA_CATEGORIES_TITLE", "Categorias criadas");
define("_AM_SMEDIA_CATEGORY", "Categoria");
define("_AM_SMEDIA_CATEGORY_ADD", "Incluir esta pasta em");
define("_AM_SMEDIA_CATEGORY_CANNOT_DELETE_HAS_CHILD", "Pelo menos uma pasta est� linkada a esta categoria.<br/>POr favor delete todas as pastas linkadas antes de deletar esta categoria.");
define("_AM_SMEDIA_CATEGORY_CHANGE", "Mudar a categoria desta pasta para");
define("_AM_SMEDIA_CATEGORY_CREATE", "Criar uma categoria");
define("_AM_SMEDIA_CATEGORY_CREATE_INFO", "Preencha o formul�rio a seguir para criar uma nova categoria.");
define("_AM_SMEDIA_CATEGORY_EDIT_INFO", "Voc� pode editar esta categoria. As modifica��s ser�o imediatamente efetuadas.");
define("_AM_SMEDIA_CATEGORY_FOLDER", "Categoria -> Pastas");
define("_AM_SMEDIA_CATEGORY_LANGUAGE_INFO_EDITING", "Editar a tradu��o da categoria");
define("_AM_SMEDIA_CATEGORY_LANGUAGE_INFO_EDITING_INFO", "Preencha o formul�rio para configurar o conte�do relacionado a linguagem selecionada.");
define("_AM_SMEDIA_CATEGORY_TEXT_CREATE", "Criar tradu��o");
define("_AM_SMEDIA_CATEGORY_TITLE", "T�tulo da categoria");
define("_AM_SMEDIA_CATEGORY_SAVE_ERROR", "Um erro ocorreu ao tentar salvar esta categoria. Segue a listagem do(s) erro(s) :");
define("_AM_SMEDIA_CATEGORY_REQ", "Nome da categoria*");

define("_AM_SMEDIA_CLEAR", "Limpar");
define("_AM_SMEDIA_COLDESCRIPT", "Descri��o da categoria");
define("_AM_SMEDIA_COLDESCRIPTDSC", "Esta descri��o ser� exibida na p�gina index do m�dulo.");
define("_AM_SMEDIA_COLISDELETED", "Categoria %s foi deletada");
define("_AM_SMEDIA_COLMODIFIED", "A categoria foi modificada com sucesso.");
define("_AM_SMEDIA_COLPOSIT", "Posi��o da categoria");
define("_AM_SMEDIA_CATEGORIES", "Categorias");
define("_AM_SMEDIA_CREATE", "Criar");
define("_AM_SMEDIA_CREATED", "Criado");
define("_AM_SMEDIA_CREATETHEDIR", "Criar a pasta");
define("_AM_SMEDIA_CREATINGNEW", "Criar novo");


// Upgrade Database constants

define('_AM_SMEDIA_DB_CHECKTABLES', 'Verificar tabelas');
define('_AM_SMEDIA_DB_CURRENTVER', 'Vers�o em uso <span class="currentVer">%s</span>');
define('_AM_SMEDIA_DB_DBVER', 'Vers�o do banco de dados <span class="dbVer">%s</span>');
define('_AM_SMEDIA_DB_NOUPDATE', 'Seu banco de dados est� atualizado. N�o � necess�ria atualiza��o.');
define('_AM_SMEDIA_DB_NEEDUPDATE', 'Seu banco de dados est� desatualizado. Por favor atualize as tabelas do bd!<br><b>Nota: A SmartFactory recomenda vivamente que voc� fa�a backup de todas as tabelas do SmartMedia antes de executar  o script de upgrade.</b><br>');
define('_AM_SMEDIA_DB_UPDATE_NOW', 'Atualize agora!');
define('_AM_SMEDIA_DB_NEEDINSTALL', 'Seu banco de dados n�o est� sincronizado com a vers�o instalada. Por favor instale a mesma versao do bd');
define('_AM_SMEDIA_DB_VERSION_ERR', 'Imposs�vel determinar a vers�o pr�via.');
define('_AM_SMEDIA_DB_MSG_MODIFYTABLE', 'Tabela modificada %s');
define('_AM_SMEDIA_DB_MSG_MODIFYTABLE_ERR', 'Erro na modifica��o de tabela %s');
define('_AM_SMEDIA_DB_MSG_ADDFIELD', 'Adicionando campo %s na tabela %s');
define('_AM_SMEDIA_DB_MSG_ADDFIELD_ERR', 'Erro na adi��o de campo %s na tabela %s');
define('_AM_SMEDIA_DB_MSG_DROPFIELD', 'Eliminar campo %s na tabela %s');
define('_AM_SMEDIA_DB_MSG_DROPFIELD_ERR', 'Erro na elimina��o de campo %s na tabela %s');

define('_AM_SMEDIA_DB_MSG_UPDATE_TABLE', 'Gravar atualiza��o na tabela %s');
define('_AM_SMEDIA_DB_MSG_UPDATE_TABLE_ERR', 'Erro enquanto gravava atualiza��o na tabela %s');
define('_AM_SMEDIA_DB_MSG_CREATE_TABLE', 'Tabela %s criada');
define('_AM_SMEDIA_DB_MSG_CREATE_TABLE_ERR', 'Erro criando tabela %s');
define('_AM_SMEDIA_DB_MSG_ADD_DATA', 'Adicionar data � tabela %s');
define('_AM_SMEDIA_DB_MSG_ADD_DATA_ERR', 'Erro enquanto adicionava data � tabela %s');
define('_AM_SMEDIA_DB_UPDATE_DB', 'Atualizando banco de dados');
define('_AM_SMEDIA_DB_UPDATE_TO', 'Atualizando para vers�o %s');
define('_AM_SMEDIA_DB_UPDATE_OK', 'Atualizado com sucesso para vers�o %s');
define('_AM_SMEDIA_DB_UPDATE_ERR', 'Erro enquanto atualizava para vers�o %s');
define('_AM_SMEDIA_DB_MSG_DROP_TABLE', 'Tabela %s foram removidas do seu banco de dados.');
define('_AM_SMEDIA_DB_MSG_DROP_TABLE_ERR', 'Erro: tabela %s N�O foi removida de seu banco de dados.');
define('_AM_SMEDIA_DB_MSG_RENAME_TABLE', 'Tabela %s foi renomeada para %s');
define('_AM_SMEDIA_DB_MSG_RENAME_TABLE_ERR', 'Erro: tabela %s n�o foi renomeada.');


define("_AM_SMEDIA_DELETE", "Deletar");
define("_AM_SMEDIA_DELETEITEM", "Deletar item");
define("_AM_SMEDIA_DELETE_CAT_CONFIRM", "Aten��o! Deletando uma categoria, todas as sub-categorias e o conte�do da categoria ser�o tamb�m deletados, incluindo quaisquer coment�rios que possam ter sido feitos. Tem certeza que deseja deletar esta categoria ?");
define("_AM_SMEDIA_DELETE_CAT_ERROR", "Ocorreu um erro ao tentar deletar esta categoria.");
define("_AM_SMEDIA_DELETE_CAT_SUCCESS", "A tradu��o da categoria foi deletada.");
define("_AM_SMEDIA_DELETE_CAT_TEXT", "Deletar a tradu��o desta categoria ?");
define("_AM_SMEDIA_DELETE_CAT_TEXT_ERROR", "Aconteceu um erro ao deletar a tadu��o desta categoria.");
define("_AM_SMEDIA_DELETECOL", "Deletar categoria");
define("_AM_SMEDIA_DESC", "Descendente");
define("_AM_SMEDIA_DESCRIP", "Descri��o da categoria");
define("_AM_SMEDIA_DESCRIPTION", "Descri��o");
define("_AM_SMEDIA_DIRCREATED", "Pasta criada com sucesso ");
define("_AM_SMEDIA_DIRNOTCREATED", "A psta n�o pode ser criada ");
define("_AM_SMEDIA_DISPLAY_LIMIT", "Mostrar");
define("_AM_SMEDIA_DOHTML", " Habilitar tags HTML");
define("_AM_SMEDIA_DOIMAGE", " habilitar imagens");
define("_AM_SMEDIA_DOLINEBREAK", " Habilitar quebra de linha");
define("_AM_SMEDIA_DOSMILEY", " Habilitar smileys");
define("_AM_SMEDIA_DOXCODE", " Habilitar XOOPS codes");
define("_AM_SMEDIA_EDITCOL", "Editar categoria");
define("_AM_SMEDIA_EDITING", "Editando");
define("_AM_SMEDIA_ERROR", " Ocorreu um erro.");

// Clips 

define("_AM_SMEDIA_CLIP", "Clip");
define("_AM_SMEDIA_CLIP_CREATE", "Criar clip");
define("_AM_SMEDIA_CLIP_CREATED", "O clip foi criado com sucesso.");
define("_AM_SMEDIA_CLIP_CREATE_INFO", "Preencha o formul�rio para criar um novo clip.");
define("_AM_SMEDIA_CLIP_DELETE", "Deletar clip");
define("_AM_SMEDIA_CLIP_DELETE_ERROR", "Ocorreu um erro ao tentar deletar este clip.");
define("_AM_SMEDIA_CLIP_DELETE_SUCCESS", "Este clip foi deletado.");
define("_AM_SMEDIA_CLIP_DESCRIPTION", "Resumo");
define("_AM_SMEDIA_CLIP_DESCRIPTIONDSC", "Texto exibido na p�gina da pasta, na listagem dos clips da pasta.");
define("_AM_SMEDIA_CLIP_EDIT", "Editar clip");
define("_AM_SMEDIA_CLIP_EDIT_INFO", "Voc� pode editar este clip. As modifica��es ser�o imediatamente atualizadas para os usu�rios.");
define("_AM_SMEDIA_CLIP_FILE_LR", "URL do clip em baixa resolu��o");
define("_AM_SMEDIA_CLIP_FILE_LRDSC", "Clip que ser� exibido no layout do m�dulo.");
define("_AM_SMEDIA_CLIP_FILE_HR", "URL do clip em alta resolu��o");
define("_AM_SMEDIA_CLIP_FILE_HRDSC", "Ser� exibido na sua vers�o full em uma nova janela.");
define("_AM_SMEDIA_CLIP_FORMAT", "Formato do clip");
define("_AM_SMEDIA_CLIP_IMAGE_HR", "Imagem");
define("_AM_SMEDIA_CLIP_IMAGE_HR_DSC", "Imagem que representa este clip (Largura recomendada � %spx)");
define("_AM_SMEDIA_CLIP_IMAGE_HR_UPLOAD", "Upload de imagem");
define("_AM_SMEDIA_CLIP_IMAGE_HR_UPLOAD_DSC", "Selecione uma imagem no seu computador. Est� imagem ser� enviada ao site e ser� selecionada como o �cone deste clip.");
define("_AM_SMEDIA_CLIP_IMAGE_LR", "Imagem em baixa resolu��o");
define("_AM_SMEDIA_CLIP_IMAGE_LR_DSC", "imagem em baixa resolu��o que representa este clip.");
define("_AM_SMEDIA_CLIP_IMAGE_LR_UPLOAD", "Upload de imagem em baixa resolu��o");
define("_AM_SMEDIA_CLIP_IMAGE_LR_UPLOAD_DSC", "Selecione uma imagem no seu computador. Est� imagem ser� enviada ao site e ser� selecionada como �cone em baixa resolu��o para este clip.");
define("_AM_SMEDIA_CLIP_LANGUAGE_INFO_EDITING", "Editar a tradu��o deste clip");
define("_AM_SMEDIA_CLIP_LANGUAGE_INFO_EDITING_INFO", "Preencha o formul�rio para configurar o conte�do relacionado a linguagem selecionada.");
define("_AM_SMEDIA_CLIP_META_DESCRIPTION", "Meta description");
define("_AM_SMEDIA_CLIP_META_DESCRIPTIONDSC", "Descri��o exibida para engines de busca na meta tag da p�gina.");
define("_AM_SMEDIA_CLIP_MODIFIED", "O clip foi modificado com sucesso.");
define("_AM_SMEDIA_CLIP_SAVE_ERROR", "Ocorreu um erro ao tentar salvar este clip.");
define("_AM_SMEDIA_CLIP_SHORT_TITLE", "T�tulo curto");
define("_AM_SMEDIA_CLIP_SUMMARY", "Resumo");
define("_AM_SMEDIA_CLIP_TAB_CAPTION_1", "Legenda da Tab 1");
define("_AM_SMEDIA_CLIP_TAB_CAPTION_2", "Legenda da Tab 2");
define("_AM_SMEDIA_CLIP_TAB_CAPTION_3", "Legenda da Tab 3");
define("_AM_SMEDIA_CLIP_TAB_TEXT_1", "Conte�do da Tab 1");
define("_AM_SMEDIA_CLIP_TAB_TEXT_2", "Conte�do da Tab 2");
define("_AM_SMEDIA_CLIP_TAB_TEXT_3", "Conte�do da Tab 3");
define("_AM_SMEDIA_CLIP_TABDSC", "Voc� pode utilizar as tabs para incluir mais informa��es ao clip. As tabs ser�o exibidas ao lado do clip. Caso n�o queira usar uma tab, simplesmente deixe-a em branco e ela n�o ser� exibida para o usu�rio.");
define("_AM_SMEDIA_CLIP_TEXT_CREATE", "Criar tradu��o");
define("_AM_SMEDIA_CLIP_TEXT_DELETE", "Deletar a tradu��o deste clip ?");
define("_AM_SMEDIA_CLIP_TEXT_DELETE_ERROR", "Ocorreu um erro ao tentar excluir a tradu��o deste clip.");
define("_AM_SMEDIA_CLIP_TEXT_DELETE_SUCCESS", "A tradu��o deste clip foi deletada com sucesso.");
define("_AM_SMEDIA_CLIP_TITLE", "T�tulo");
define("_AM_SMEDIA_CLIP_TITLE_REQ", "T�tulo*");
define("_AM_SMEDIA_CLIP_WEIGHT", "Peso");
define("_AM_SMEDIA_CLIPS", "Clips");
define("_AM_SMEDIA_CLIPS_ALL", "Todos os clips");
define("_AM_SMEDIA_CLIPS_ALL_DSC", "Listagem de todos os clips.");
define("_AM_SMEDIA_CLIPS_DSC", "Listagem de todos os clips de uma pasta <b><i>%s</i></b>.");
define("_AM_SMEDIA_CLIPS_TITLE", "Clips criados");
define("_AM_SMEDIA_CLIPS_WITHIN_FOLDER", "Clips dentro da pasta <b><i>%s</i></b>");

define("_AM_SMEDIA_CLIP_WIDTH", "Largura do Clip");
define("_AM_SMEDIA_CLIP_WIDTHDSC", "");	
define("_AM_SMEDIA_CLIP_HEIGHT", "Peso do Clip");
define("_AM_SMEDIA_CLIP_HEIGHTDSC", "");
define("_AM_SMEDIA_EDIT", "Editar");

// Folders 

define("_AM_SMEDIA_FOLDER", "Pasta");
define("_AM_SMEDIA_FOLDER_CANNOT_DELETE_HAS_CHILD", "Pelo menos um clip est� linkado a esta pasta.<br/>Por favor, queira deletar todos os clips linkados antes de deletar esta pasta.");
define("_AM_SMEDIA_FOLDER_CLIP", "Pasta -> Clip");
define("_AM_SMEDIA_FOLDER_CREATE", "Criar pasta");
define("_AM_SMEDIA_FOLDER_CREATED", "A pasta foi criada com sucesso.");
define("_AM_SMEDIA_FOLDER_CREATE_INFO", "Preencha este formul�rio para criar uma nova pasta.");
define("_AM_SMEDIA_FOLDER_DELETE", "Deletar pasta");
define("_AM_SMEDIA_FOLDER_DELETE_ERROR", "Ocorreu um erro ao deletar esta pasta.");
define("_AM_SMEDIA_FOLDER_DELETE_SUCCESS", "Esta pasta foi deletada com sucesso.");
define("_AM_SMEDIA_FOLDER_DESCRIPTION", "Descri��o");
define("_AM_SMEDIA_FOLDER_DESCRIPTIONDSC", "Esta descri��o ser� exibida no topo da p�gina da pasta.");
define("_AM_SMEDIA_FOLDER_EDIT", "Editar pasta");
define("_AM_SMEDIA_FOLDER_EDIT_INFO", "Voc� pode editar esta pasta. As modifica��es realizadas ser�o imediatamente percebidas pelos usu�rios.");
define("_AM_SMEDIA_FOLDER_IMAGE_HR", "Imagem");
define("_AM_SMEDIA_FOLDER_IMAGE_HR_DSC", "Imagem que representa esta pasta (largura recomendada %spx)");
define("_AM_SMEDIA_FOLDER_IMAGE_HR_UPLOAD", "Upload de imagem");
define("_AM_SMEDIA_FOLDER_IMAGE_HR_UPLOAD_DSC", "Selecione uma imagem no seu computador. A imagem ser� enviada ao site e automaticamente selecionada como �cone desta pasta.");
define("_AM_SMEDIA_FOLDER_IMAGE_LR", "imagem em baixa resolu��o");
define("_AM_SMEDIA_FOLDER_IMAGE_LR_DSC", "Imagem em baixa resolu��o que representa esta pasta.");
define("_AM_SMEDIA_FOLDER_IMAGE_LR_UPLOAD", "Upload de imagem em baixa resolu��o");
define("_AM_SMEDIA_FOLDER_IMAGE_LR_UPLOAD_DSC", "Selecione uma imagem no seu computador. A imagem ser� enviada ao site e automaticamente selecionada como �cone em baixa resolu��o para esta pasta.");
define("_AM_SMEDIA_FOLDER_LANGUAGE_INFO_EDITING", "Editar tradu��o da pasta");
define("_AM_SMEDIA_FOLDER_LANGUAGE_INFO_EDITING_INFO", "Preencha este formul�rio para configurar para esta pasta o conte�do relacionado a linguagem selecionada.");
define("_AM_SMEDIA_FOLDER_META_DESCRIPTION", "Meta description");
define("_AM_SMEDIA_FOLDER_MODIFIED", "A pasta foi modificada com sucesso.");
define("_AM_SMEDIA_FOLDER_SAVE_ERROR", "Ocorreu um erro ao salvar esta pasta.");
define("_AM_SMEDIA_FOLDER_SHORT_TITLE", "T�tulo curto");
define("_AM_SMEDIA_FOLDER_SHOW_CLIP", "Clips dentro desta pasta");
define("_AM_SMEDIA_FOLDER_STATUS", "Status");
define("_AM_SMEDIA_FOLDER_SUMMARY", "Resumo");
define("_AM_SMEDIA_FOLDER_SUMMARYDSC", "O resumo ser� exibido na p�gina da categoria, na listagem das pastas de uma categoria.");
define("_AM_SMEDIA_FOLDER_TEXT_CREATE", "Criar tradu��o");
define("_AM_SMEDIA_FOLDER_TEXT_DELETE", "Deletar a tradu��o desta pasta ?");
define("_AM_SMEDIA_FOLDER_TEXT_DELETE_ERROR", "Ocorreu um erro ao deletar a tradu��o desta pasta.");
define("_AM_SMEDIA_FOLDER_TEXT_DELETE_SUCCESS", "A tradu��o desta p�gina foi deletada com sucesso.");
define("_AM_SMEDIA_FOLDER_TITLE", "T�tulo");
define("_AM_SMEDIA_FOLDER_TITLE_REQ", "T�tulo*");
define("_AM_SMEDIA_FOLDER_WEIGHT", "Peso");
define("_AM_SMEDIA_FOLDERS", "Pastas");
define("_AM_SMEDIA_FOLDERS_DSC", "Listagem de todas as pastas");
define("_AM_SMEDIA_FOLDERS_TITLE", "Pastas criadas");

// FORMAT

define("_AM_SMEDIA_FORMAT", "Formato");
define("_AM_SMEDIA_FORMAT_CREATE", "Criando um formato");
define("_AM_SMEDIA_FORMAT_CREATE_ERROR", "Ocorreu um erro na cria��o deste formato.");
define("_AM_SMEDIA_FORMAT_CREATE_SUCCESS", "Este formato foi criado com sucesso.");
define("_AM_SMEDIA_FORMAT_DSC", "***para chegar");
define("_AM_SMEDIA_FORMAT_EDITING", "Editando um formato de Clip");
define("_AM_SMEDIA_FORMAT_EDITING_INFO", "Voc� pode editar este formato de Clip. Simplesmente preencha o seguinte formul�rio.");
define("_AM_SMEDIA_FORMAT_EXT", "Extens�o");
define("_AM_SMEDIA_FORMAT_EXT_DSC", "***to come");
define("_AM_SMEDIA_FORMAT_CREATING", "Criando um formato de Clip");
define("_AM_SMEDIA_FORMAT_CREATING_INFO", "Voc� pode criar um formato de Clip. Simplesmente preencha o seguinte formul�rio.");
define("_AM_SMEDIA_FORMAT_DELETE_ERROR", "Ocorreu um erro enquanto voc� apagava este formato.");
define("_AM_SMEDIA_FORMAT_DELETE_CONFIRM", "Voc� realmente quer apagar este formato?");
define("_AM_SMEDIA_FORMAT_DELETE_SUCCESS", "Este formato foi apagado com sucesso.");
define("_AM_SMEDIA_FORMAT_EDIT_ERROR", "Ocorreu um erro enquanto voc� editava este formato.");
define("_AM_SMEDIA_FORMAT_EDIT_SUCCESS", "Este formato foi editado com sucesso.");
define("_AM_SMEDIA_FORMAT_TEMPLATE", "Modelo");
define("_AM_SMEDIA_FORMAT_TEMPLATE_DSC", "***to come");
define("_AM_SMEDIA_FORMATS", "Formato de Clips");
define("_AM_SMEDIA_FORMATS_TITLE", "Formato de Clips");
define("_AM_SMEDIA_FORMATS_TITLE_INFO", "Aqui est�o todos os formatos de Clip dispon�veis neste m�dulo. Voc� pode adicionar, editar ou apagar formatos de Clip.");




define("_AM_SMEDIA_DEFAULT_LANGUAGE", "Linguagem padr�o");
define("_AM_SMEDIA_DEFAULT_LANGUAGE_DSC", "Esta � a linguagem padr�o para este item");
define("_AM_SMEDIA_IMAGE", "Imagem da categoria");
define("_AM_SMEDIA_IMAGE_DSC", "Imagem que representa esta categoria (Largura recomendada %spx.)");
define("_AM_SMEDIA_IMAGE_UPLOAD", "Upload de imagem");
define("_AM_SMEDIA_IMAGE_UPLOAD_DSC", "Selecione uma imagem no seu computador. Esta imagem ser� enviada ao site e configurada como �cone desta categoria.");
define("_AM_SMEDIA_ITEM_EDIT", "Editar item");
define("_AM_SMEDIA_ITEM", "Item");
define("_AM_SMEDIA_ITEMS", "Itens");
define("_AM_SMEDIA_GOMOD", "Ir para o m�dulo");
define("_AM_SMEDIA_GROUPS", "Gerenciamento dos grupos");
define("_AM_SMEDIA_GROUPSINFO", "Configura��o das permiss�es do m�dulo e dos blocos para cada grupo");
define("_AM_SMEDIA_HELP", "Ajuda");
define("_AM_SMEDIA_HITS", "Acessos");
define("_AM_SMEDIA_ID", "Id");
define("_AM_SMEDIA_INDEX", "Index");
define("_AM_SMEDIA_INVENTORY", "Resumo do m�dulo");
define("_AM_SMEDIA_ITEMCATEGORYNAME", "Categoria");
define("_AM_SMEDIA_ITEMID", "Id");
define("_AM_SMEDIA_LANGUAGE", "Linguagem");
define("_AM_SMEDIA_LANGUAGE_INFO", "tradu��o");
define("_AM_SMEDIA_LANGUAGE_ITEM", "Linguagem padr�o deste item");
define("_AM_SMEDIA_LANGUAGE_ITEM_DSC", "Se nenhuma tradu��o deste item for encontrada na linguagem selecionda pelo usu�rio, este item ser� exibido nesta linguagem. <br />Para incluir uma tradu��o, edite um item e clique em 'Criar tradu��o.");
define("_AM_SMEDIA_LANGUAGE_NEW", "Linguagem da tradu��o");
define("_AM_SMEDIA_LANGUAGE_NEW_DSC", "As informa��es aqui digitadas, ser�o exibidas quando esta linguagem for selecionada pelo usu�rio.");
define("_AM_SMEDIA_MODADMIN", "Administra��o do M�dulo :");
define("_AM_SMEDIA_MODIFY", "Modificar");
define("_AM_SMEDIA_MODIFYCAT", "Modificar categoria");
define("_AM_SMEDIA_MODIFYTHISCAT", "Modificar esta categoria?");
define("_AM_SMEDIA_NO", "N�o");
define("_AM_SMEDIA_NOFOUND", "Nenhum usu�rio encontrado.");
define("_AM_SMEDIA_NONE", "Nenhum");
define("_AM_SMEDIA_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>N�o dispon�vel</span>");
define("_AM_SMEDIA_NOCAT", "Nenhuma categoria para exibir");
define("_AM_SMEDIA_NOCOLTOEDIT", "Nenhuma categoria para editar!");
define("_AM_SMEDIA_NO_LANGUAGE_INFO", "Nenhuma tradu��o para exibir");
define("_AM_SMEDIA_NOTUPDATED", "Ocorreu um erro ao atualizar o banco de dados!");
define("_AM_SMEDIA_OFFLINE", "Offline");
define("_AM_SMEDIA_OPTIONS", "Op��es");
define("_AM_SMEDIA_OPTS", "Prefer�ncias");
define("_AM_SMEDIA_PARENT_CATEGORY_EXP", "Categoria principal<span style='font-size: xx-small; font-weight: normal; display: block;'>Esta categoria � uma sub-categoria ?<br />Caso seja, selecione a categoria<br />principal desta sub-categoria.</span>");
define("_AM_SMEDIA_PATH", "Caminho");
define("_AM_SMEDIA_PATH_ITEM", "Upload items");
define("_AM_SMEDIA_PATH_FILES", "Arquivos anexados");
define("_AM_SMEDIA_PATH_IMAGES", "Imagens gerais");
define("_AM_SMEDIA_PATH_IMAGES_CATEGORY", "Imagens da categoria");
define("_AM_SMEDIA_PATH_IMAGES_FOLDER", "imagens da pasta");
define("_AM_SMEDIA_PATH_IMAGES_CLIP", "Imagens do clip");
define("_AM_SMEDIA_PATHCONFIGURATION", "Configura��o dos paths(caminhos)");
define("_AM_SMEDIA_PERSISTENT_INFO", "Estas informa��es n�o mudam com a linguagem");
define("_AM_SMEDIA_PUBLISH", "Publish");
define("_AM_SMEDIA_PUBLISHED", "Publicado");
define("_AM_SMEDIA_SELECT_SORT", "Ordem de exibi��o");
define("_AM_SMEDIA_SELECT_STATUS", "Status");
define("_AM_SMEDIA_SHOWING", "Exibindo");
define("_AM_SMEDIA_SORT", "Ordenar por");
define("_AM_SMEDIA_TITLE", "T�tulo");
define("_AM_SMEDIA_TOTALCLIPS", "Clips :");
define("_AM_SMEDIA_TOTALFOLDERS", "Pastas :");
define("_AM_SMEDIA_TOTALCAT", "Categorias :");
define("_AM_SMEDIA_UPLOAD", "Upload");
define('_AM_SMEDIA_UPDATE_MODULE', 'Atualizar m�dulo');
define("_AM_SMEDIA_UID", "Nome do Publisher");
define("_AM_SMEDIA_UID_DSC", "Selecione o nome do publisher");
define("_AM_SMEDIA_VIEW_CATS", "Selecione as categorias que cada grupo pode acessar");
define("_AM_SMEDIA_WEIGHT", "Peso");
define("_AM_SMEDIA_YES", "Sim");

// New table
define("_AM_SMEDIA_ITEMCAT", "Categoria");
define("_AM_SMEDIA_STATUS", "Status");

?>
