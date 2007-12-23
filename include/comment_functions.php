<?php

/**
* $Id$
* Module: SmartMedia
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

function smartmedia_com_update($clip_id, $total_num)
{
    $db = &Database::getInstance();
    $sql = 'UPDATE ' . $db->prefix('smartmedia_clips') . ' SET comments = ' . $total_num . ' WHERE clipid = ' . $clip_id;
    $db->query($sql);
}

function smartmedia_com_approve(&$comment)
{
    // notification mail here
}

?>