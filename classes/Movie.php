<?php
include_once __DIR__ . "/./GenreClass.php";

class Movie
{
    public $title;
    // public $genre;
    public $filmLength;
    public GenreClass $genre;

    function __construct(string $title, GenreClass $genre, int $filmLength)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->filmLength = $filmLength;
    }

    public function isBoring()
    {
        if ($this->filmLength > 130) {
            return true;
        } else {
            return false;
        }
    }

    public function isChildFriendly() {}
}

$matrix = new Movie('Matrix', $action, 136);

$inception = new Movie('Inception', $scifi, 128);


$movies = [$matrix, $inception];
