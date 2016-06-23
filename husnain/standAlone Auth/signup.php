<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config.php';
    $username = $_POST['username'];
    $md_password = md5($_POST['password']);

    $query = "INSERT INTO users(user_name, password) VALUES('$username', '$md_password')";
    $result=mysqli_query($conn,$query);
    if ($result == true )
    {
        echo "SignUp Successful";
        echo "<a href = 'login.php'>Login here</a>";
        return;
    }
//    header("location:login.php");
}

?>

<html>
<head>
    <title></title>
</head>
<body>
<form method="POST">
    Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <input type="submit">

</form>
</body>
</html>
