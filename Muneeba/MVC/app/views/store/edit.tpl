<a href="index.php">back</a>
<form action="../update" method="post">
    <input type="hidden" name="store_id" value="{$id}">
    Manager Staff ID: <input type="text" name="Store[manager_staff_id]"><br>
    Address ID: <input type="text" name="Store[address_id]"><br>

    <input type="submit" name="update" value="update">
</form>
