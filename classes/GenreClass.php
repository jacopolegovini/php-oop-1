<?php

class GenreClass
{
    private $childFriendly;
    public $name;

    function __construct(string $name)
    {
        // $this->childFriendly = $childFriendly;
        $this->name = $name;
    }
}

$action = new GenreClass('Action');
$scifi = new GenreClass('Sci-fi');