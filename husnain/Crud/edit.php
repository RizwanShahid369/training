<html>
<head>
    <title>Edit page</title>
</head>
<body>

<?php
require_once 'include/DbFunction.php';

$ob = new DbFunction();
$res = $ob->getRecord();
if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    echo $row['fathers_name'];
    echo $row['city'];
    echo $row['dob'];
    echo $row['fathers_name'];

} else {
    echo "no record found";
}
?>

<form method="post" action="include/DbFunction.php">
    Full Name: <input type="text" name="fullname" value= <?php  echo $row['full_name'];?> ><br>
    Father's Name: <input type="text" name="fathername" value=<?php  echo $row['fathers_name'];?>><br>
    Class: <input type="text" name="class" value= <?php  echo $row['class'];?>><br>
    School: <input type="text" name="school" value= <?php  echo $row['school'];?>><br>
    city: <input type="text" name="city" value= <?php  echo $row['city'];?>><br>
    address: <input type="text" name="address" value= <?php  echo $row['address'];?>><br>
    Date of Birth: <input type="text" name="dob" value= <?php  echo $row['dob'];?>><br>
    <input type='hidden' name='action' value='update' >
    <input type='hidden' name='uid' value= <?php  echo $row['id'];?> />
    <input type="submit" value="Submit">
</form>

</body>
</html>
