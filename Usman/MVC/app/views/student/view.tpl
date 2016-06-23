{* Smarty *}
{* Smarty *}
<table  border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Father Name</th>
        <th>Address</th>
    </tr>
    {foreach from=$arr key=k item=i}
        <tr>
            <td>{$i.id}</td>
            <td>{$i.name}</td>
            <td>{$i.Father_Name}</td>
            <td>{$i.address}</td>
        </tr>
    {/foreach}

</table>