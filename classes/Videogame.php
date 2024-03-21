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

    public function __construct(string $name, string $studio, Genre $genre, float $price)
    {
        $this->name = $name;
        $this->studio = $studio;
        $this->genre = $genre;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStudio(): string
    {
        return $this->studio;
    }

    public function getGenre(): Genre
    {
        return $this->genre;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

