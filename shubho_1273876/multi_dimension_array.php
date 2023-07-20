<?php


$books = array(
    array(
        'title' => 'Harry Potter and the Sorcerer\'s Stone',
        'author' => 'J.K. Rowling',
        'year' => 1997
    ),
    array(
        'title' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'year' => 1960
    ),
    array(
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'year' => 1925
    ),
    array(
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'year' => 1813
    )
);

echo $books[0]['title'] . " ";
echo $books[1]['author'] . " ";
echo $books[3]['year'];
