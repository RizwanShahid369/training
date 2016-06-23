<?php
require_once 'DB.php';
$ob = new DB();

// To Add Record
$ob->addRecord('husnain', 'zaheer', 'USA');
die;

//To delete Record 
$ob->delete(25);

//To Update Record
$ob->update('ahmad','ali', 'USA',12);


// To Retrieve All records
$re = $ob->getAll();

while($row = $re->fetch() ) {

    echo "ID: ".$row['id'] . "\n";
    echo "First Name: ".$row['first_name']. "<br>";
    echo "Last Name: ".$row['first_name'] . "<br>";
    echo "Address: ".$row['first_name'] . "<br>";

}


// TO retrieve Specified records 

$re = $ob->retrieve(12);

while($row = $re->fetch() ) {

    echo "ID: ".$row['id'] . "\n";
    echo "First Name: ".$row['first_name']. "<br>";
    echo "Last Name: ".$row['first_name'] . "<br>";
    echo "Address: ".$row['first_name'] . "<br>";

}