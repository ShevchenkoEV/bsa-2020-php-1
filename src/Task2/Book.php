<?php

declare(strict_types=1);

namespace App\Task2;

class Book
{

    public string $title;
    public int $price;
    public int $pagesNumber;

    public function __construct(string $title, int $price, int $pagesNumber)
    {
        $this->title = $title;
        $this->price = $price;
        $this->pagesNumber = $pagesNumber;
    }

    public function getTitle(): string
    {
        // @todo
        return $this->title;
    }

    public function getPrice(): int
    {
        // @todo
        return $this->price;
    }

    public function getPagesNumber(): int
    {
        //@todo
        return $this->pagesNumber;
    }
}