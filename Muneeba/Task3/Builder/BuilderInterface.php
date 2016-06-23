<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:09 AM
 */
namespace Task3;

interface BuilderInterface
{
    /**
     * @return mixed
     */
    public function createMeal();
    /**
     * @return mixed
     */
    public function addBurger();
    /**
     * @return mixed
     */
    public function addFries();
    /**
     * @return mixed
     */
    public function addDrink();
    /**
     * @return mixed
     */
    public function getMeal();
}
