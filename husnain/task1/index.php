<?php
include_once 'header.php';
?>


<form action="" method="post">
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    Address: <input type="text" name="address"><br>
    <input type="submit" value="Submit">
</form>


<?php
include_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $address = $_POST['address'];
    // Validate Before adding to the database
    if (empty($firstname) || empty($lastname) || empty($address)) {
        echo "Please fill all the fields!";
    } else {
        $sql = "INSERT INTO test.student (first_name, last_name, address)
        VALUES ('$firstname', '$lastname', '$address')";
        //prints wether query Successful or not
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
include_once 'footer.php';
?>

