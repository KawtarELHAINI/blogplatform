<?php

class Article
{

    private $idarticle;
    private $titre;
    private $content;
    private $datecreated;
    

    public function __construct()
    {
    }

    public function getIdArticle()
    {
        return $this->idarticle;
    }
    public function setIdArticle($idarticle)
    {
        $this->idarticle = $idarticle;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getdatecreated()
    {
        return $this->datecreated;
    }
    public function setdatecreated($datecreated)
    {
        $this->datecreated = $datecreated;
    }
   
}
