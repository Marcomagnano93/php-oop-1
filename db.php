<?php
//Classes
include __DIR__ . '/models/Production.php';
include __DIR__ . '/models/Genre.php';
include __DIR__ . '/models/Movie.php';
include __DIR__ . '/models/TvSeries.php';



//Istances
$adult = new Genre('Adult', 'Movie for adult people');
$family = new Genre('Family', 'Adventure');
$comic = new Genre('Comic', 'Nice time, perfect for families');

$productions = [
    new Movie('Rambo', 'en, it', 7.6, $adult, 105000, 160),
    new Movie('E.T.', 'en, it, esp', 5.2, $family, 250000, 230),
    new Series('Pippobaudo', 'it', 2.5, $adult, 6),
    new Series('Montalbano', 'it', 9.2, $family, 14),
    new Production('Richard Benson', 'it', 9, $comic)
];
