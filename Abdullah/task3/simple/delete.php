<?php
require_once 'include/function.php';

$a=new db;
?>




   <form action="delete.php" method="post">
    <b>Delete record Using ID</b>
    <p>

        <label for="id">ID:</label>

        <input type="text" name="id" id="id">

    </p>


    <input type="submit" value="Submit" onclick=<?php $a->delete()?> >

</form>
