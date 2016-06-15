<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/14/16
 * Time: 1:27 AM
 */
include_once('BookSingleton.php');
include_once('BookBorrower.php');

echo ('BEGIN TESTING SINGLETON PATTERN');
echo ("\n");


$bookBorrower1 = new BookBorrower();
$bookBorrower2 = new BookBorrower();


$bookBorrower1->borrowBook();
writeln('BookBorrower1 asked to borrow the book');
writeln('BookBorrower1 Author and Title: ');
writeln($bookBorrower1->getAuthorAndTitle());
writeln('');


$bookBorrower2->borrowBook();
writeln('BookBorrower2 asked to borrow the book');
writeln('BookBorrower2 Author and Title: ');
writeln($bookBorrower2->getAuthorAndTitle());
writeln('');


$bookBorrower1->returnBook();
writeln('BookBorrower1 returned the book');
writeln('');

writeln("Now Book borrower 2 can borrow book");

$bookBorrower2->borrowBook();
writeln('BookBorrower2 Author and Title: ');
writeln($bookBorrower2->getAuthorAndTitle());
writeln('');


writeln('END TESTING SINGLETON PATTERN');


function writeln($line_in) {
    echo $line_in, "\n";
}