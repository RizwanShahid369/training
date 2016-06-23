{* Smarty *}

<a href="./actor/insert">insert</a>
<form action="search" method="post">
    Search Full Name: <input type="text" name="Actor[first_name]"><br>
    <input type="submit" name="search" value="search">
</form>

<table>
    {assign var='i' value=1}
    {section name=user loop=$arr}
        <tr>
            <td>{$i}</td>
            <td>{$arr[user].first_name}</td>
            <td>{$arr[user].last_name}</td>
            <td>{$arr[user].last_update}</td>

            <td><a href="actor/edit/{$arr[user].actor_id}" >Edit</a></td>
            <td><a onclick="return confirm(\'are you sure?\')"  href="/actor/removeOne/{$arr[user].actor_id}" >Delete</a></td>
        </tr>
        {assign var='i' value=$i+1}
    {/section}
</table>
<a href="logout">Log Out</a>