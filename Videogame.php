<?php

enum Genre: string
{
    case Shooter = "Shooter";
    case Racing = "Racing";
    case Sports = "Sports Simulation";
    case Indie = "Indie";
}

class Videogame
{
    private string $name;
    private string $studio;
    private Genre $genre;
    private float $price;

    public function __construct($name, $studio, $genre, $price)
    {
        $this->name = $name;
        $this->studio = $studio;
        $this->genre = $genre;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStudio()
    {
        return $this->studio;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

