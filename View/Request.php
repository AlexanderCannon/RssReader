<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include'../RssXmlReader.php';

    $reader = new RssXmlReader;
    $results = $reader->ReadXml('http://feeds.bbci.co.uk/news/technology/rss.xml');
    //var_dump($results);
    usort($results, function($a, $b){
        return strcmp($a->getTitle(), $b->getTitle());
    });
    
    foreach($results as $s)
    {
        $imgArray = $s->getImage();
        echo    "<img src='" .
                $imgArray['url'] . 
                "' height ='" .
                $imgArray['height'] .
                "' width ='" .
                $imgArray['width'].
                "'/>" .
                "<a href = '" . 
                $s->getLink() . "'>".
                $s->getTitle()
                . "</a>" .
                $s->getPubDate() . " " . 
                $s->getDescription() . "<br>";
    }
