{* Smarty *}

<a href="store/insert">insert</a>
<form action="store/search" method="post">
    Search Full Name: <input type="text" name="Store[store_id]"><br>
    <input type="submit" name="search" value="search">
</form>

<table>
    {assign var='i' value=1}
    {section name=user loop=$arr}
        <tr>
            <td>{$arr[user].store_id}</td>
            <td>{$arr[user].manager_staff_id}</td>
            <td>{$arr[user].address_id}</td>
            <td>{$arr[user].last_update}</td>

            <td><a href="store/edit/{$arr[user].store_id}" >Edit</a></td>
            <td><a onclick="return confirm(\'are you sure?\')"  href="store/removeOne/{$arr[user].store_id}" >Delete</a></td>
        </tr>
        {assign var='i' value=$i+1}
    {/section}
</table>
