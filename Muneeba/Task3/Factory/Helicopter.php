<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:30 AM
 */
namespace Task3\Factory;

class Helicopter extends Toy
{
    public function __construct()
    {
        $this->setName('Helicopter');
        $this->setPrice('500');
    }
}
