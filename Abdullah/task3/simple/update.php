<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Page</title>
</head>
<body>
<form action="update.php" method="post">
    <?php

    $id = $_POST['id'];
    $name = $_GET['name'];
    $fname = $_GET['fname'];
    $class = $_GET['class'];
    $dob = $_GET['dob'];
    $city = $_GET['city'];
    $address = $_GET['address'];
    $school = $_GET['school'];
    ?>
     Name<br>
    <input type="text" name="id" value=<?php echo htmlentities($id); ?>><br><br>
    Father Name
    <input type="text" name="fname" value=<?php echo htmlentities($fname); ?>><br><br>
    Date of Birth
    <input type="text" name="fname" value=<?php echo htmlentities($dob); ?>><br><br>
    class<br>
    <input type="text" name="dob" value=<?php echo htmlentities($class); ?>><br><br>
    Address<br>
    <input type="text" name="address" value=<?php echo htmlentities($address); ?>><br><br>
    City<br>
    <input type="text" name="city" value=<?php echo htmlentities($city); ?>> <br><br>
    School<br>
    <input type="text" name="school" value=<?php echo htmlentities($school); ?>> <br><br>

<input type="hidden" name="ed" value="ed">

<input type="submit" value="Submit">
</form>
</body>
</html>
