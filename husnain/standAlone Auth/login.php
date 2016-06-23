<?php
if($_POST)
{
    include 'config.php';
    $username=$_POST['username'];
    $password= md5($_POST['password']);
//    $sUser=mysqli_real_escape_string($conn,$username);
//    $sPass=mysqli_real_escape_string($conn,$password);
    // For Security 
    $query="SELECT * From users where user_name='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['name']= $username;
        header('location:index.php');
    }
}

?>

<form method="POST">
Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="password" name="password"><br>
    Remember me<input type="checkbox" name="remember">
    <input type="submit">

</form>
<a href="signup.php">SignUp here</a>