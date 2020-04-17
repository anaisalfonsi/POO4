<?php
// ici propriétés + méthodes de la class Article;
class Article {


    private $title;
    private $content;
    private $author;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($text)
    {
        $this->content = $text;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($name)
    {
        $this->author = $name;
    }
}

