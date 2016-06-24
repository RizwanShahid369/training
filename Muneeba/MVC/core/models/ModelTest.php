<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/17/16
 * Time: 1:25 AM
 */
namespace MVC;



use PHPUnit_Framework_TestCase;

require 'Model.php';

class ModelTest extends PHPUnit_Framework_TestCase
{
    //$object to make an instance of the DB class
    private $object;

    /**
     * Constructor to assign $object an instance of the DB class
     *
     *
     */
    public function __construct()
    {
        $this->object = new ActorModel();
        //var_dump($this->db);
    }

    /**
     * Validates if the insert function is selecting the values from the DB correctly
     *
     * true is the actual outcome
     *
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     */
    public function testInsert()
    {
        $insertArr = [
            'first_name' => 'Some',
            'last_name' => 'Actor'
        ];

        $this->assertEquals(null, $this->object->insert($insertArr));
    }

    /**
     * Validates if the find is executing the statement  correctly
     *
     * true is the actual outcome
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     */
    public function testFind()
    {
        $param = [
            'first_name' => 'Some'
        ];
        $this->assertEquals(null, $this->object->find($param));
    }

    /**
     * Validates if the selectAll is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testSelectAll()
    {
        $this->assertEquals(null, $this->object->selectAll());

    }


    /**
     * Validates if the resultset is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testUpdate()
    {
        $insertArr = [
            'first_name' => 'Some',
            'last_name' => 'Actor'
        ];
        $col = $this->object->columnNames[0];
        $id = 4;
        $this->assertEquals(null, $this->object->update($insertArr, $col, $id));

    }
    /**
     * Validates if the delete is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testDelete()
    {
        $this->assertEquals(null, $this->object->delete());
    }

    /**
     * Validates if the delete One is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testDeleteOne()
    {
        $col = $this->object->columnNames[0];
        $id = 4;
        $this->assertEquals(null, $this->object->deleteOne($col, $id));
    }
    /**
     * Validates if the Select One is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testSelectOne()
    {
        $col = $this->object->columnNames[0];
        $id = 4;
        $this->assertEquals(null, $this->object->selectOne($col, $id));
    }

    /**
     * Validates if the Login is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testLogIn()
    {
        $email= "abc@gmail.com";
        $password = "qwe";
        $this->assertEquals(-1, $this->object->logIn($email, $password));
    }

    /**
     * Validates if the Login is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testSignUp()
    {
        $email= "abc@gmail.com";
        $password = "qwe";
        $this->assertEquals(11, $this->object->signUp($email, $password));
    }
}
