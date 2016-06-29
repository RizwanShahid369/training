<html>
<a href="index.php">back</a>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 3:06 AM
 */
$array = $_POST["array"];
echo '<table border="1" style="width:100%">';
foreach ($array as $value) {
    echo "<br><tr>";
    foreach ($value as $col) {
        echo "<td>".$col."</td>";
    }
    echo '<td><a href="index.php?page=edit&id=' . $value[0] . '">Edit</a></td>';
    echo '<td><a onclick="return confirm(\'are you sure?\')"  href="index.php?action=delete&id='
        . $value[0] . '">x</a></td>';
    echo "</tr>";
}
echo '</table>';
