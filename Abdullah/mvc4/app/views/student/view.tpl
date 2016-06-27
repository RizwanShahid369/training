
<table  border="1">
    <tr>
        <th>ID</th>
        <th>Course</th>
        <th>phonenumber</th>
        <th>city</th>
    </tr>
    {foreach $arr as $i}
        <tr>
            <?php echo "viewwww \n";print_r($i); ?>
            <td>{$i.Id}</td>
            <td>{$i.Course}</td>
            <td>{$i.phonenumber}</td>
            <td>{$i.city}</td>
        </tr>
    {/foreach}

</table>

