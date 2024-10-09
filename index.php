<?php

class Movie
{
    public $title;
    public $genre;
    public $filmLength;

    function __construct($title, $genre, $filmLength)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->filmLength = $filmLength;
    }
}

$matrix = new Movie('Matrix', 'Action', 136);
var_dump($matrix);
