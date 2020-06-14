<?php

/* Листинг 15.14 */
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
/* /Листинг 15.14 */
