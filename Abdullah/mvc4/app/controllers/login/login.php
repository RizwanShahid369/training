<B>LOGIN FORM</B>

<form action="login.php" method="post">

    <p>

        <label for="id">Enter username:</label>

        <input type="text" name="user" id="firstName">

    </p>

    <p>

        <label for="name">Pasword:</label>

        <input type="text" name="pass" id="lastName">

    </p>



    <input type="submit" value="Submit" >
</form>



<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "NewDatabase";


$a=$_POST['user'];
$b=$_POST['pass'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select username from login where username='$a' and password='$b'";
$result = mysqli_query($conn, $sql);
//echo "YEs";
if (mysqli_num_rows($result)==1) {
    echo "User xexists";
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $a;
    echo $_SESSION['username'] ;
    header('Location: welcome.tpl');
    while($row = mysqli_fetch_assoc($result)) {
        echo "username: " . $row["username"]. " password: " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>