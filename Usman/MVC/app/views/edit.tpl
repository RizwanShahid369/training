<html>

{*{php}*}
    {*ini_display_errors(1);*}
    {*$school = $_GET['school'];*}
    {*echo $school;*}
    {*die();*}
{*{/php}*}
<form action="?url=student/editVal/" method="post">

    Name: <input type="text" name="name" value= "{$name}" > <br>
    Father Name: <input type="text" name="fname" value= "{$fname}" > <br>
    Date of Birth <input type="text" name="dob" value= "{$dob}" > <br>
    City: <input type="text" name="city" value= "{$city}" > <br>
    School: <input type="text" name="school" value="{$school}"><br>
    Address: <input type="text" name="address" value="{$address}"><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="submit" value="submit">
</form>

</html>

