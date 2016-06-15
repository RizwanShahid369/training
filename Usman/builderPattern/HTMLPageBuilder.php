<?php

/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/15/16
 * Time: 5:47 AM
 */

include('AbstractPageBuilder.php');
include('HTMLPage.php');
class HTMLPageBuilder extends AbstractPageBuilder {
    private $page = NULL;
    
    function __construct() {
        $this->page = new HTMLPage();
    }
    function setTitle($title_in) {
        $this->page->setTitle($title_in);
    }
    function setHeading($heading_in) {
        $this->page->setHeading($heading_in);
    }
    function setText($text_in) {
        $this->page->setText($text_in);
    }
    function formatPage() {
        $this->page->formatPage();
    }
    function getPage() {
        return $this->page;
    }
}