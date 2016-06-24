<a href="index.php">back</a>
<form action="../update" method="post">
    <input type="hidden" name="customer_id" value="{$id}">
    First Name: <input type="text" name="Customer[first_name]"><br>
    Last Name: <input type="text" name="Customer[last_name]"><br>
    Store ID: <input type="text" name="Customer[store_id]"><br>
    Email: <input type="text" name="Customer[email]"><br>
    Address: <input type="text" name="Customer[address_id]"><br>

    <input type="submit" name="update" value="update">
</form>

