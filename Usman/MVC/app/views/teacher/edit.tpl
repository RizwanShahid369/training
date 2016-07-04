<html>

{*{php}*}
    {*ini_display_errors(1);*}
    {*$school = $_GET['school'];*}
    {*echo $school;*}
    {*die();*}
{*{/php}*}
<form action="?url=teacher/editVal" method="post">

    Name: <input type="text" name="name" value= "{$name}" > <br>
    Department: <input type="text" name="dept" value= "{$dept}" > <br>
    Rank <input type="text" name="rank" value= "{$rank}" > <br>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="submit" value="submit">
</form>

</html>

