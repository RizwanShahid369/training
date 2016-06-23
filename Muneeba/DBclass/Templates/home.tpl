{* Smarty *}

<a href="index.php?page=insert">insert</a>
<form action="index.php?page=search&action=search" method="post">
    Search Full Name: <input type="text" name="sname"><br>
    <input type="submit" name="search" value="search">
</form>


<table>
    {foreach $arr as $students}
        <tr bgcolor="{cycle values="#aaaaaa,#bbbbbb"}">
            <td>{$user.full_name}</td>
            <td>{$user.dob}</td>
            <td>{$user.father_name}</td>
            <td>{$user.class}</td>
            <td>{$user.address}</td>
            <td>{$user.city}</td>
            <td>{$user.school}</td>
        </tr>
    {/foreach}
</table>