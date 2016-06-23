<?php

require_once 'Database.php';
require_once 'Criteria.php';
/**
 * this file Contains test data that uses Database Class
 *
 * uncomment the sections one by one and test results
 * 
 */

// test Select
/*$crit = new Criteria();
$crit->setColumns(array('first_name', 'last_name', 'address'));
//$crit->setColumns();
$crit->where(array('id' => 1));
$db = Database::getInstance();
$db->select('student', $crit);
$db->prepare();
//$db->bind(':id', $id, 1);
$db->execute();
$res = $db->resultSet();
//print_r($res);
foreach ($res as $key => $value) {
    foreach ($value as $key => $value2) {
        echo $key . ' is ' . $value2 . "<br>";
    }
}*/

// test Insert
/*$db = Database::getInstance();
$db->insert('student',array('first_name' => 'Husnain', 'last_name' => 'Zaheer', 'address' => 'UAE'));
$db->prepare();
$db->execute();*/

//test order by
/*$criteria = new Criteria();
$criteria->setColumns();
$criteria->orderBy("first_name","ASC");
$db = Database::getInstance();
$db->select("student",$criteria);
$db->prepare();
$db->execute();
$res = $db->resultSet();
//print_r($res);
foreach ($res as $key => $value) {
    foreach ($value as $key => $value2) {
        echo $key . ' is ' . $value2 . "<br>";
    }
}*/
// test whereLte()
/*$criteria = new Criteria();
$criteria->setColumns();
$criteria->whereLte("id",10);
$db = Database::getInstance();
$db->select("student",$criteria);
$db->prepare();
$db->execute();
$res = $db->resultSet();
foreach ($res as $key => $value) {
    foreach ($value as $key => $value2) {
        echo $key . ' is ' . $value2 . "<br>";
    }
}*/
//update test
//$criteria = new Criteria();
//$criteria->updateColumn(array('first_name' => 'Updated', 'last_name' => 'updateLAST'));
//$db = Database::getInstance();
//$criteria->where("id",11);
//$criteria->whereOR();
//$criteria->where("id",13);
//$db->delete('student',$criteria);
//$db->prepare();
//$db->bind(":col",13);
//$db->execute();
/*$res = $db->resultSet();
foreach ($res as $key => $value) {
    foreach ($value as $key => $value2) {
        echo $key . ' is ' . $value2 . "<br>";
    }
}*/

// aggregate and group by Having
/*$criteria = new Criteria();
$db = Database::getInstance();
$criteria->setColumns(array('SUM(id) AS SumId'));
$criteria->setGroupBy('first_name');
$criteria->havingGte('SUM(id)',10);
$db->select('student',$criteria);
$db->prepare();
$db->execute();
$res = $db->resultSet();
foreach ($res as $key => $value) {
    foreach ($value as $key => $value2) {
        echo $key . ' is ' . $value2 . "<br>";
    }
}*/

// join example
$criteria = new Criteria();
$db = Database::getInstance();
$criteria->setColumns(array('student.id','first_name','content','std_id'));
$db->join('student','post','student.id = post.std_id',$criteria);
$db->prepare();
$db->execute();
$res = $db->resultSet();
foreach ($res as $key => $value) {
    foreach ($value as $key => $value2) {
        echo $key . ' is ' . $value2 . "<br>";
    }
}