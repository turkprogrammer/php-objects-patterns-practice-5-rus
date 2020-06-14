<?php

// mylib/LibraryCatalogue.php

namespace vitaliyviznyuk\popp5rus\library;

use popp\library\inventory\Book;

class LibraryCatalogue
{
    private $books = [];

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }
}
