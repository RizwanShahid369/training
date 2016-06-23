<?php
// first thing is to start session 
session_start();
// now to check if variable is true

if(!$_SESSION['name'])
{
    header('location:login.php');
}
?>

<h1>Welcome <?php echo $_SESSION['name'] ?> You are Logged In....!!!!!</h1>
<a href="logout.php">Logout</a>