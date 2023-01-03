<?php

include_once __DIR__ . '/classi/movie.php';

$movie1 = new Movie( 'The mask', 1994, 'Fantasy', 6 );

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


?>