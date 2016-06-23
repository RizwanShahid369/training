
<html>
<head>
    <title>Add Form</title>
</head>
<body>

<form method="post" action="include/DbFunction.php">
    Full Name: <input type="text" name="fullname"><br>
    Father's Name: <input type="text" name="fathername"><br>
    Class: <input type="text" name="class"><br>
    School: <input type="text" name="school"><br>
    city: <input type="text" name="city"><br>
    address: <input type="text" name="address"><br>
    Date of Birth: <input type="text" name="dob"><br>
    <input type='hidden' name='action' value='create' />
    <input type="submit" value="Submit">
</form>
<a href="manage.php">View All</a>

</body>
</html>

