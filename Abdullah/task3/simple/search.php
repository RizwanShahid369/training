<?php
require_once 'include/function.php';

$a=new db;
?>
<form action="search.php" method="post">
    <b>Search record Using ID</b>
    <p>

        <label for="id">ID:</label>

        <input type="text" name="id" id="id">

    </p>


    <input type="submit" value="Submit" onclick="<?php $a->search() ?>">

</form>

