<?php
//Classes
include __DIR__ . '/Production.php';
include __DIR__ . '/Genre.php';



//Istances
$adult = new Genre('Adult', 'Movie for adult people');
$family = new Genre('Family', 'Adventure');
$comic = new Genre('Comic', 'Nice time, perfect for families');

$movies = [
    new Production('Rambo', 'en, it', 7.6, $adult),
    new Production('E.T.', 'en, it, esp', 5.2, $family),
    new Production('Pippobaudo', 'it', 2.5, $adult),
    new Production('Montalbano', 'it', 9.2, $family),
    new Production('Richard Benson', 'it', 9, $comic)
];
