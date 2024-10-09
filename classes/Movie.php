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

    function isBoring($filmLength)
    {
        if ($filmLength > 130) {
            return true;
        } else {
            return false;
        }
    }
}

$matrix = new Movie('Matrix', 'Action', 136);
var_dump($matrix);
var_dump($matrix->isBoring($matrix->filmLength));

$inception = new Movie('Inception', 'Sci-fi', 128);
var_dump($inception);
var_dump($inception->isBoring($inception->filmLength));
