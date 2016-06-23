<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:35 AM
 */
namespace Task3\Factory;

class Car extends Toy
{
    public function __construct()
    {
        $this->setName('Car');
        $this->setPrice('200');
    }
}
