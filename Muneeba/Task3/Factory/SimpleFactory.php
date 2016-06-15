<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:37 AM
 */
namespace Task3\Factory;

/**
 * class SimpleFactory.
 */
class SimpleFactory
{
    /**
     * @var array
     */
    protected $typeList;
    /**
     * You can imagine to inject your own type list or merge with
     * the default ones...
     */
    public function __construct()
    {
        $this->typeList = array(
            'helicopter' =>'\Helicopter',
            'car' => '\Car',
            'battleship' => '\Battleship'
        );
    }
    /**
     * Creates a toy.
     *
     * @param string $type a known type key
     *
     * @throws \InvalidArgumentException
     *
     * @return an instance of Toy
     */
    public function createToy($type)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type is not valid toy");
        }
        $toyName = $this->typeList[$type];
        return new $toyName();
    }
}
