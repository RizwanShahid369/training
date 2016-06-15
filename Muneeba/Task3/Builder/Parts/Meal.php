<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 5:06 AM
 */
namespace Task3\Parts;

abstract class Meal
{
    /**
     * @var array
     */
    protected $data;
    /**
     * @param string $key
     * @param mixed $value
     */
    public function setItem($key, $value)
    {
        $this->data[$key] = $value;
    }
}
