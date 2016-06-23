<html>
<head>
    <title>Edit Form</title>
</head>
<body>
<h3>student Edit page </h3>



<form method="post" action="">
    <table>
        {foreach from=$record key=k item=i}
            <tr>
                <td>Fist Name:</td>
                <td><input type="text" name="fname" value=""></td>
            </tr>
            <tr>
                <td> Last Name:</td>
                <td><input type="text" name="lname" value=""></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        {/foreach}
    </table>

    <a href="listt">View All</a>

</body>
</html>

