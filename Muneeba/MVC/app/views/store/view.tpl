{* Smarty *}

<a href="store/insert">insert</a>
<form action="index.php?page=search&action=search" method="post">
    Search Full Name: <input type="text" name="sname"><br>
    <input type="submit" name="search" value="search">
</form>

<table>
    {assign var='i' value=1}
    {section name=user loop=$arr}
        <tr>
            <td>{$i}</td>
            <td>{$arr[user].store_id}</td>
            <td>{$arr[user].manager_staff_id}</td>
            <td>{$arr[user].address_id}</td>
            <td>{$arr[user].last_update}</td>
        </tr>
        {assign var='i' value=$i+1}
    {/section}
</table>
