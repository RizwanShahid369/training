<html>
<a href="index.php">back</a>
<form action="index.php?action=edit" method="post">
<input name="id" value="<?php echo $_GET['id'] ?>" type="hidden">
Full Name: <input type="text" name="name"><br>
Date of Birth: <input type="text" name="dob"><br>
Father name: <input type="text" name="fname"><br>
Class: <input type="text" name="class"><br>
Address: <input type="text" name="address"><br>
City: <input type="text" name="city"><br>
School: <input type="text" name="school"><br>
<input type="submit" name="update" value="update">
</form>
</html>

