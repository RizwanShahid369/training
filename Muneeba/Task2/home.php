<html>

<a href="index.php?page=insert">insert</a>
<form action="index.php?page=search&action=search" method="post">
Search Full Name: <input type="text" name="sname"><br>
<input type="submit" name="search" value="search">

</html>
<?php

getRecords($arr);
echo '<table border="1" style="width:100%">';
foreach ($arr as $val) {
    echo "<br><tr>";
    foreach ($val as $col) {
        echo "<td>".$col."</td>";
    }
    echo '<td><a href="index.php?page=edit&id=' . $val[0] . '">Edit</a></td>';
    echo '<td><a onclick="return confirm(\'are you sure?\')"  href="index.php?action=delete&id='
        . $val[0] . '">x</a></td>';
    echo "</tr>";
}
echo '</table>';



