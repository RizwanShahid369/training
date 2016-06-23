<h2>All students information</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Operation</th>

</tr>
    {foreach from=$stdarr key=k item=i}
        <tr>
            <td>{$i.id}</td>
            <td>{$i.first_name}</td>
            <td>{$i.last_name}</td>
            <td>{$i.address}</td>
            <td><a href="edit?id={$i.id}">Edit</a> / <a href="delete?id={$i.id}">Delete</a> </td>
        </tr>
    {/foreach}

</table>


