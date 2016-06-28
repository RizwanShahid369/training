{* Smarty *}
<table border="1">

    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Date of Birth</th>
        <th>Father Name</th>
        <th>City</th>
        <th>School</th>
        <th>Address</th>
    </tr>

    {foreach $arr as $i}
    <tr>
            <td>{$i.id}</td>
            <td>{$i.name}</td>
            <td>{$i.dob}</td>
            <td>{$i.Father_Name}</td>
            <td>{$i.city}</td>
            <td>{$i.school}</td>
            <td>{$i.address}</td>
            <td><a href = '?url=studentController/edit'>Edit</a></td>
            <td><a href = '?url=studentController/delete'>Delete</td>
    </tr>
    {/foreach}
</table>