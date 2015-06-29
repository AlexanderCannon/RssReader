<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RssReader
{

    //
    public function getItem($url) {
        $page = $this->getPage($url);
        var_dump($page);die;
	$item = preg_match_all("@(<item>)(.*)(</item>)@iUs",$page);
        //$tit = $this->parseTitle($url);
        var_dump($item);die;
        foreach($item as $i) {
            var_dump($i);
        }
			
    }

    private function parseTitle($url) {
	$title = "feeds.bbci.co.uk/news/technology/rss.xml";
	return $title; 	
    }

    public function getPage($url) {
	$page = file_get_contents($url);
	return $page;	
    }

}
$rss = new RssReader();
$baseurl = "http://feeds.bbci.co.uk/news/technology/rss.xml";
//$pg = $rss->getPage($baseurl);
$rss->getItem($baseurl);
ob_flush();
