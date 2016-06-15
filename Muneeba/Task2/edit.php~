<html>

<form action="index.php?page=edit" method="post">
<input name="id" value="<?php echo $_GET['id'] ?>" type="hidden">
Full Name: <input type="text" name="name"><br>
Date of Birth: <input type="text" name="dob"><br>
Father name: <input type="text" name="fname"><br>
Class: <input type="text" name="class"><br>
Address: <input type="text" name="address"><br>
City: <input type="text" name="city"><br>
School: <input type="text" name="school"><br>
<input type="submit" name="update" value="update">
<input type="submit" name="done" value="done">
</form>
</html>
<?php
require_once 'include/functions.php';

if (isset($_POST['update'])) {
    $id = $_POST["id"];
    $name = (isset($_POST["name"]) && $_POST["name"]) ? $_POST["name"] : '';
    $dob = (isset($_POST["dob"]) && $_POST["dob"]) ? $_POST["dob"] : '';
    $fname = (isset($_POST["fname"]) && $_POST["fname"]) ? $_POST["fname"] : '';
    $class = (isset($_POST["class"]) && $_POST["class"]) ? $_POST["class"] : '';
    $address = (isset($_POST["address"]) && $_POST["address"]) ? $_POST["address"] : '';
    $city = (isset($_POST["city"]) && $_POST["city"]) ? $_POST["city"] : '';
    $school = (isset($_POST["school"]) && $_POST["school"]) ? $_POST["school"] : '';
    if ($name != '') {
        updateName($id, $name);
    }
    if ($dob != "") {
        updateDOB($id, $dob);
    }
    if ($fname != "") {
        updateFatherName($id, $fname);
    }
    if ($class != "") {
        updateFatherName($id, $class);
    }
    if ($address != "") {
        updateFatherName($id, $address);
    }    
    if ($city != "") {
        updateFatherName($id, $city);
    }
    if ($school != "") {
        updateFatherName($id, $school);
    }
    if (isset($_POST['done'])) {
        header("Location: index.php");
    }

}


