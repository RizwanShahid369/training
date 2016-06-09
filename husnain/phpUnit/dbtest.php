<?php
require_once 'db.php';
class Test extends PHPUnit_Framework_TestCase
{
    private $instance;
    //private $mysqli;

    /**
     * initialize the DB class instance
     */
    public function setUp()
    {
        $this->instance = DB::getInstance();
        //$mysqli = $instance->getConnection();
    }

    /**
     * test insertion on the database
     *
     */
    public function testInsert()
    {
        $expected = 17;
        $actual = $this->instance->insertRecored('husy','zack','lahore');

        if ($actual != false) {
            $this->instance->deleteRecord($actual);
        }

        $this->assertEquals($expected, $actual);
    }
}
    

?>
