<?php

/**
* $Id$
* Module: SmartClient
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/


include_once("admin_header.php");

include_once(SMARTMEDIA_ROOT_PATH . "class/about.php");
$aboutObj = new SmartmediaAbout(_AM_SMEDIA_ABOUT);
$aboutObj->render();

?>