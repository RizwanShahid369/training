<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:36 AM
 */
namespace Task3\Factory;

class BattleShip extends Toy
{
    public function __construct()
    {
        $this->setName('Battleship');
        $this->setPrice('800');
    }
}
