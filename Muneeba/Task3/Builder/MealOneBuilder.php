<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:08 AM
 */
namespace Task3;

class MealOneBuilder implements BuilderInterface
{
    /**
     * @var Parts\mealone
     */
    protected $meal_one;

    /**
     * {@inheritdoc}
     */

    /**
     * @return mixed
     */
    public function createMeal()
    {
        $this->meal_one = new Parts\MealOne();
    }

    /**
     * @return mixed
     */
    public function addBurger()
    {
        $this->meal_one->setPart('chicken burger', new Parts\Burger());
    }

    /**
     * @return mixed
     */
    public function addFries()
    {
        $this->meal_one->setPart('fries', new Parts\Fries());
    }

    /**
     * @return mixed
     */
    public function addDrink()
    {
        $this->meal_one->setPart('cola', new Parts\Drink());
    }


    public function getMeal()
    {
        return $this->meal_one;
    }
}
