<?php

class Catalog
{



    // Game more expensive
    public function getMostExpensiveGame(array $arrayOfGames)
    {
        $price = 0;
        foreach ($arrayOfGames as $game) {
            if ($price < $game->getPrice()) {
                $price = $game->getPrice();
            }
        }
        return $price;
    }


    public function getGameFromStudio(array $arrayOfGames, string $studio)
    {
        $gamesByStudio = [];
        foreach ($arrayOfGames as $game) {
            if ($game->getStudio() === $studio) {
                array_push($gamesByStudio, $studio);
            }
        }
        var_dump($gamesByStudio);
        //implode($gamesByStudio);

    }



    public function getGameByLetter(array $arrayOfGames, string $letter)
    {
    }
}
