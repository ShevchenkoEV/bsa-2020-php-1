<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Task2\BooksGenerator;
use App\Task2\Book;


$booksGenerator = new BooksGenerator(50, getLibraryBooks(), 60, getStoreBooks());
foreach ($booksGenerator->generate() as $book){
    $booksGenerator->filteredBooks[] = $book;
}
foreach ($booksGenerator->filteredBooks as $value){
    echo "В массиве книги: ".$value->getTitle().PHP_EOL;
}




function getLibraryBooks()
{
    return [
        new Book('Don Quixote', 100, 100),
        new Book('The Great Gatsby', 50, 50),
        new Book('Harry Potter', 20, 20)
    ];
}

function getStoreBooks()
{
    return [

        new Book('Hamlet', 150, 30),
        new Book('Crime and Punishment', 600, 50),
        new Book('Pride and Prejudice', 40, 60),
    ];
}
