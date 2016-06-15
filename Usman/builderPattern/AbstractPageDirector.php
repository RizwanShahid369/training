<?php

/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/15/16
 * Time: 5:46 AM
 */
abstract class AbstractPageDirector {
    abstract function __construct(AbstractPageBuilder $builder_in);

    abstract function buildPage();
    abstract function getPage();
}