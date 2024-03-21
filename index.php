<?php

require_once 'classes/Videogame.php';
require_once 'classes/Catalog.php';

$game1 = new Videogame("GTA", "Rockstar", Genre::Shooter, 29.30);
$game2 = new Videogame("Need For Speed", "EA", Genre::Racing, 19.50);
$game3 = new Videogame("FIFA", "EA", Genre::Sports, 39.99);
$game4 = new Videogame("Ori And The Wild Forest", "EA", Genre::Indie, 19.99);
//var_dump($game1);

$catalog = new Catalog([$game1, $game2, $game3, $game4]);
//var_dump($catalog);


$mostExpensiveGame = $catalog->getMostExpensiveGame();
echo "Most expensive game: $mostExpensiveGame\n";

$gamesFromEA = $catalog->getGameFromStudio("EA");
echo "Games from EA:\n";
print_r($gamesFromEA);

$gamesWithF = $catalog->getGameByLetter("A");
echo "Games with 'A':\n";
print_r($gamesWithF);