<?php

class GenreClass
{
    public $name;
    private $suggestedAge;

    function __construct(string $name, int $suggestedAge)
    {
        $this->name = $name;
    }

    public function isForChild()
    {
        $this->suggestedAge < 18 ? true : false;
    }
}

$action = new GenreClass('Action', '18');
$scifi = new GenreClass('Sci-fi', '18');
