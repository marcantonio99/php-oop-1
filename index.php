<?php

include_once __DIR__ . '/classi/movie.php';


$movie1 = new Movie( 'The mask', 1994, 'Fantasy', 10 );

echo $movie1->title;
echo "<br>";
echo $movie1->year;
echo "<br>";
echo $movie1->genre;
echo "<br>";
echo $movie1->age;
echo "<br>";
echo $movie1->perTutti();
echo "<br>";

$movie2 = new Movie( 'Nightmare', 1984, 'Horror', 18 );

echo "<br>";
echo $movie2->title;
echo "<br>";
echo $movie2->year;
echo "<br>";
echo $movie2->genre;
echo "<br>";
echo $movie2->age;
echo "<br>";
echo $movie2->perTutti();
echo "<br>";

$movie3 = new Movie( 'Luca', 2021, 'Animazione', 6 );

echo "<br>";
echo $movie3->title;
echo "<br>";
echo $movie3->year;
echo "<br>";
echo $movie3->genre;
echo "<br>";
echo $movie3->age;
echo "<br>";
echo $movie3->perTutti();
echo "<br>";


?>