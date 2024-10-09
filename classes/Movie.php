<?php

class Movie
{
    public $title;
    public $genre;
    public $filmLength;

    function __construct(string $title, string $genre, int $filmLength)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->filmLength = $filmLength;
    }

    function isBoring()
    {
        if ($this->filmLength > 130) {
            return true;
        } else {
            return false;
        }
    }
}

$matrix = new Movie('Matrix', 'Action', 136);

$inception = new Movie('Inception', 'Sci-fi', 128);


$movies = [$matrix, $inception];
