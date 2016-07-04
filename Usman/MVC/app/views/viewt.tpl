{* Smarty *}
<table border="1">

    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Department</th>
        <th>Rank</th>
    </tr>

    {foreach $arr as $i=>$obj}
    <tr>
            <td>{$obj.id}</td>
            <td>{$obj.name}</td>
            <td>{$obj.dept}</td>
            <td>{$obj.rank}</td>
            <td><a href = '?url=teacher/edit/{$obj.id}&name={$obj.name}&dept={$obj.dept}&rank={$obj.rank}'>Edit</a></td>
            <td><a href = '?url=teacher/delVal/{$obj.id}'>Delete</td>
    </tr>
    {/foreach}
</table>
<br>
To add record  <a href = '?url=teacher/insert'>Insert</a>