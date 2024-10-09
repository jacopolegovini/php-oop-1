<?php

class Genre
{
    public $genreType1;
    public $genreType2;

    function __construct(string $genreType1, string $genreType2 = null)
    {
        $this->genreType1 = $genreType1;
        $this->genreType2 = $genreType2;
    }
}
