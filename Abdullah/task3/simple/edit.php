<?php
require_once 'include/function.php';
//include 'config.php';
$a=new db;

?>


<form action="insert.php" method="get">

    <p>

        <label for="id">ID:</label>

        <input type="text" name="id" id="firstName">

    </p>

    <p>

        <label for="name">name:</label>

        <input type="text" name="name" id="lastName">

    </p>

    <p>

        <label for="dob">dob:</label>

        <input type="text" name="dob" id="emailAddress">

    </p>
    <p>

        <label for="fathername">Father_name:</label>

        <input type="text" name="fname" id="emailAddress">

    </p>
    <p>

        <label for="class">Class:</label>

        <input type="text" name="class" id="emailAddress">

    </p>        <p>

        <label for="address">Address:</label>

        <input type="text" name="address" id="emailAddress">

    </p>        <p>

        <label for="city">City:</label>

        <input type="text" name="city" id="emailAddress">

    </p>        <p>

        <label for="school">School:</label>

        <input type="text" name="school" id="emailAddress">

    </p>

    <input type="submit" value="Submit" onclick=<?php $a->insert() ?> >
</form>
