{* Smarty *}
{* Smarty *}
<table  border="1">
    <tr>
        <th>ID</th>
        <th>Course</th>
        <th>phonenumber</th>
        <th>city</th>
    </tr>
    {foreach from=$arr as $i}
        <tr>
            <td>{$i.id}</td>
            <td>{$i.Course}</td>
            <td>{$i.phonenumber}</td>
            <td>{$i.city}</td>
        </tr>
    {/foreach}

</table>