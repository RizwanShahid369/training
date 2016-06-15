<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/14/16
 * Time: 1:32 AM
 */

//include ('BookSingleton.php');


class BookBorrower
{
    private $borrowedBook;
    private $haveBook = FALSE;


    function __construct() {
    }


    function getAuthorAndTitle() {
        if (TRUE == $this->haveBook) {
            return $this->borrowedBook->getAuthorAndTitle();
        } else {
            return "I don't have the book";
        }
    }


    function borrowBook() {
        $this->borrowedBook = BookSingleton::borrowBook();
        if ($this->borrowedBook == NULL) {
            $this->haveBook = FALSE;
        } else {
            $this->haveBook = TRUE;
        }
    }


    function returnBook() {
        $this->borrowedBook->returnBook($this->borrowedBook);
    }
}