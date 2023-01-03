<?php

class Movie {
    public $title;
    public $year;
    public $genre;
    public $age;

    public function __construct( $title, $year, $genre, $age )
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->age = $age;
    }
}

?>