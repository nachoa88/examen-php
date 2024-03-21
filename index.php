<?php

require_once 'Videogame.php';
require_once 'Catalog.php';

$game1 = new Videogame("GTA", "Rockstar", Genre::Shooter, 29.30);
$game2 = new Videogame("Need For Speed", "EA", Genre::Racing, 19.50);
$game3 = new Videogame("FIFA", "EA", Genre::Sports, 39.99);
$game4 = new Videogame("Ori", "EA", Genre::Indie, 19.99);
//var_dump($game1);



// catalog = new Catalog();
// $arrayOfGames = [$game1, $game2, $game3, $game4];
//var_dump($arrayOfGames);
// getMostExpensiveGame($arrayOfGames);
// getGameFromStudio($arrayOfGames, "EA");