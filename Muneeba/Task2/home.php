<html>
<script>
function deleletconfig(id){

var del=confirm("Are you sure you want to delete this record?");
if (del==true){
   var num = id

   alert ("Record Deleted.")
   var str1= "delete.php?id="
   
   var n = num.toString()
   
   
   var res = str1 + n; 
   
   window.location.href = res;
}
return del;
}
</script>
<form action="index.php?home" method="get">
Full Name: <input type="text" name="name"><br>
Date of Birth: <input type="text" name="dob"><br>
Father name: <input type="text" name="fname"><br>
Class: <input type="text" name="class"><br>
Address: <input type="text" name="address"><br>
City: <input type="text" name="city"><br>
School: <input type="text" name="school"><br>
<input type="submit" name="insert" value="insert">
<input type="submit" name="view" value="view">
</form>
<form action="index.php?home" method="post">
Search Full Name: <input type="text" name="sname"><br>
<input type="submit" name="search" value="search">

</html>
<?php

require_once 'include/functions.php';
if(isset($_GET['insert'])) {
    $name = $_GET["name"];
    $dob = $_GET["dob"];
    $fname = $_GET["fname"];
    $class = $_GET["class"];
    $address = $_GET["address"];
    $city = $_GET["city"];
    $school = $_GET["school"];
    insert($name, $dob, $fname, $class, $address, $city, $school);
}
if(isset($_GET['view'])) {
    getRecords($arr);
    echo '<table border="1" style="width:100%">';
    foreach ($arr as $val)
    {
        echo "<br><tr>";
        foreach ($val as $col)
        {
            echo "<td>".$col."</td>";      
        }
        echo '<td><a href=\"edit.php?id=' . $val[0] . '\">Edit</a></td>';
        echo '<td><a onclick="return deleletconfig('. $val[0] . ')" href="delete.php?id=' . $val[0] . '">x</a></td>';
	//echo '<td><a href="delete.php?id=' . $val[0] . '" value="view">Delete</a></td>';
        echo "</tr>";
    }
    echo '</table>';
}

if(isset($_POST['search'])) {
    $sname = $_POST["sname"];
    getRecord($sname, $array);
    echo $sname;
    echo '<table border="1" style="width:100%">';
    foreach ($array as $value)
    {
        echo "<br><tr>";
        foreach ($value as $col)
        {
            echo "<td>".$col."</td>";      
        }
        echo '<td><a href="edit.php?id=' . $value[0] . '">Edit</a></td>';       
	echo '<td><a onclick="return deleletconfig('. $value[0] . ')" href="delete.php?id=' . $value[0] . '">x</a></td>';
        echo "</tr>";
    }
    echo '</table>';
}

