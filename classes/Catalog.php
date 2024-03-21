<?php

class Catalog
{
    public $games = [];

    public function __construct(array $games)
    {
        $this->games = $games;
    }


    public function getMostExpensiveGame(): float
    {
        $price = 0;
        foreach ($this->games as $game) {
            if ($price < $game->getPrice()) {
                $price = $game->getPrice();
            }
        }
        //var_dump($price);
        return $price;
    }


    public function getGameFromStudio(string $studio): array
    {
        $gamesByStudio = [];
        foreach ($this->games as $game) {
            if ($game->getStudio() === $studio) {
                array_push($gamesByStudio, $game);
            }
        }
        return $gamesByStudio;
        //var_dump($gamesByStudio);
    }


    public function getGameByLetter(string $letter): array
    {
        $gamesByLetter = [];
        foreach ($this->games as $game) {
            if (strpos($game->getName(), $letter) !== false) {
                array_push($gamesByLetter, $game);
            }
        }
        //var_dump($gamesByLetter);
        return $gamesByLetter;
    }
}

