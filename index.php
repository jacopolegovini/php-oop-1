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

    function isBoring($filmLength)
    {
        if ($filmLength > 120) {
            return true;
        } else {
            return false;
        }
    }
}

$matrix = new Movie('Matrix', 'Action', 136);
var_dump($matrix);
var_dump($matrix->isBoring($matrix->filmLength));
