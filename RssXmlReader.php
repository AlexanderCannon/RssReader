<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'Model\Story.php';

class RssXmlReader
{
    function ReadXml($url)
    {
        $xml    = simplexml_load_file($url);
        $y      = sizeof($xml->channel->item);
        $x      = 0;
        $result = [];
        while ($x < $y )
        {
            $item   = null;
            $item   = ($xml->channel->item[$x]);
            $image  = $item->children('media', true)->thumbnail->attributes();
            $story  = new Story( $item->title, $item->pubDate,  $item->link,
                    $item->description,  $item->guid, $image );
            $result[$x] = $story;
            $x++;
        }
        //var_dump($result);
        return $result;
    }
}