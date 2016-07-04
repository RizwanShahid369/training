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

    {foreach $arr as $i=>$obj}
    <tr>
            <td>{$obj.id}</td>
            <td>{$obj.name}</td>
            <td>{$obj.dob}</td>
            <td>{$obj.Father_Name}</td>
            <td>{$obj.city}</td>
            <td>{$obj.school}</td>
            <td>{$obj.address}</td>
            <td><a href = '?url=student/edit/{$obj.id}&name={$obj.name}&dob={$obj.dob}&fname={$obj.Father_Name}&city={$obj.city}&school={$obj.school}&address={$obj.address}'>Edit</a></td>
            <td><a href = '?url=student/delVal/{$obj.id}'>Delete</td>
    </tr>
    {/foreach}
</table>
<br>
To add record  <a href = '?url=student/insert'>Insert</a>