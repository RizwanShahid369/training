<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student Record</title>
</head>
<body>

<form action="include/methods.php" method="post">

    Full name:<br>
    <input type="text" name="fathername"><br><br>
    Father name:<br>
    <input type="text" name="fullname"><br><br>
    Date of birth<br>
    <input type="date" name="date" placeholder="DD-MM-YYYY"><br><br>
    class<br>
    <input type="text" name="class"><br><br>
    Address<br>
    <input type="text" name="address"><br><br>
    City<br>
    <input type="text" name="city"><br><br>
    School<br>
    <input type="text" name="school"><br><br>

    <input type="hidden" name="add" value="add">

    <input type="submit" value="Submit">
</form>
</body>
</html>