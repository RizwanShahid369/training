<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:16 AM
 */
namespace Task3;

class MealTwoBuilder implements BuilderInterface
{
    /**
     * @var Parts\meal_one
     */
    protected $meal_two;

    /**
     * {@inheritdoc}
     */

    /**
     * @return mixed
     */
    public function createMeal()
    {
        $this->meal_two = new Parts\MealTwo();
    }

    /**
     * @return mixed
     */
    public function addBurger()
    {
        $this->meal_two->setPart('beef burger', new Parts\Burger());
    }

    /**
     * @return mixed
     */
    public function addFries()
    {
        $this->meal_two->setPart('cheese fries', new Parts\Fries());
    }

    /**
     * @return mixed
     */
    public function addDrink()
    {
        $this->meal_two->setPart('cola', new Parts\Drink());
    }

    /**
     * @return mixed
     */

    public function getMeal()
    {
        return $this->meal_two;
    }
}
