<?php

require 'vendor/autoload.php';

use Acme\BookReader\Book;
use Acme\BookReader\BookInterface;
use Acme\BookReader\eReaderAdapter;
use Acme\BookReader\Kindle;
use Acme\BookReader\Nook;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

$person = new Person();
$book = new Book();

$kindle = new Kindle();
$nook = new Nook();

// Read a paper book
var_dump(
    $person->read($book)
);

// Read a kindle using the reader adapter
var_dump(
    $person->read(new eReaderAdapter($kindle))
);

// Read a nook using the reader adapter
var_dump(
    $person->read(new eReaderAdapter($nook))
);
