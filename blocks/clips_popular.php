<?php

/**
* $Id$
* Module: SmartMedia
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}

function b_smartmedia_clips_popular_show($options)
{
	if (!isset($smartmedia_clip_handler)) {
		$smartmedia_clip_handler = xoops_getmodulehandler('clip', 'smartmedia');
	}
	
	// This must contain the name of the folder in which reside SmartClient
	if( !defined("SMARTMEDIA_DIRNAME") ){
 	   define("SMARTMEDIA_DIRNAME", 'smartmedia');
	}
	include_once(XOOPS_ROOT_PATH."/modules/" . SMARTMEDIA_DIRNAME . "/include/common.php");

	//$max_clips = $options[0];
	$title_length = $options[0];
	$max_clips = $options[1];
	
	$clipsArray =& $smartmedia_clip_handler->getClipsFromAdmin(0, $max_clips, 'clips.counter', 'DESC', 'all');
	
	If ($clipsArray) {
		foreach ($clipsArray as $clipArray) {
			$clip = array();
			$clip['itemlink'] = '<a href="' . SMARTMEDIA_URL . 'clip.php?categoryid=' . $clipArray['categoryid'] . '&folderid=' . $clipArray['folderid'] . '&clipid=' . $clipArray['clipid'] . '">• ' . $clipArray['title']. '</a> (' . $clipArray['counter'] . ')';
			$block['clips'][] = $clip;
			unset ($clip);
		}
	}

	$block['smartmedia_url'] = SMARTMEDIA_URL;

	return $block;
}

function b_smartmedia_clips_popular_edit($options)
{
	$form = "<table>";
	$form .= "<tr>";
	$form .= "<td>" . _MB_SMEDIA_TRUNCATE_TITLE . "</td>";
	$form .= "<td>" . "<input type='text' name='options[]' value='" . $options[0] . "' /></td>";
	$form .= "</tr>";
	$form .= "<tr>";
	$form .= "<td>" . _MB_SMEDIA_MAX_CLIPS . "</td>";
	$form .= "<td>" . "<input type='text' name='options[]' value='" . $options[1] . "' /></td>";
	$form .= "</tr>";
	$form .= "</table>";
	
	return $form;
}
?>