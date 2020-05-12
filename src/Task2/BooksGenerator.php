<?php

declare(strict_types=1);

namespace App\Task2;

class BooksGenerator
{
    public int $minPagesNumber;
    public array $libraryBooks;
    public int $maxPrice;
    public array $storeBooks;
    public array $filteredBooks;

    public function __construct($minPagesNumber, $libraryBooks, $maxPrice, $storeBooks)
    {
        $this->minPagesNumber = $minPagesNumber;
        $this->libraryBooks = $libraryBooks;
        $this->maxPrice = $maxPrice;
        $this->storeBooks = $storeBooks;
    }

    public function generate(): \Generator
    {
        //@todo
        foreach ($this->libraryBooks as $book){
            if ($this->minPagesNumber <= $book->getPagesNumber()){
                yield $book;
            }

        }
        foreach ($this->storeBooks as $book){
            if ($this->maxPrice >= $book->getPrice()){
                yield $book;
            }
        }
    }






}