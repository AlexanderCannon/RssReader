<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Story
{
    function __construct($Title, $PubDate, $Link, $Description, $Guid, $Image)
    {
        $this->Title       = $Title;
        $this->PubDate     = $PubDate;
        $this->Link        = $Link;
        $this->Description = $Description;
        $this->Guid        = $Guid;
        $this->Image       = $Image;
    }

    private $Title;
    private $PubDate;
    private $Link;
    private $Description;
    private $Guid;
    private $Image;
    
    public function getTitle() {
        return $this->Title;
    }

    public function getPubDate() {
        return $this->PubDate;
    }

    public function getLink() {
        return $this->Link;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function getGuid() {
        return $this->Guid;
    }

    public function getImage() {
        return $this->Image;
    }

    public function setTitle($Title) {
        $this->Title = $Title;
    }

    public function setPubDate($PubDate) {
        $this->PubDate = $PubDate;
    }

    public function setLink($Link) {
        $this->Link = $Link;
    }

    public function setDescription($Description) {
        $this->Description = $Description;
    }

    public function setGuid($Guid) {
        $this->Guid = $Guid;
    }

    public function setImage($Image) {
        $this->Image = $Image;
    }

}