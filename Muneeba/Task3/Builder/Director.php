<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:20 AM
 */
namespace Task3;


class Director
{
    /**
     * The director don't know about concrete part.
     *
     * @param BuilderInterface $builder
     *
     * @return Parts\Meal
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createMeal();
        $builder->addBurger();
        $builder->addFries();
        $builder->addDrink();
        return $builder->getMeal();
    }
}
