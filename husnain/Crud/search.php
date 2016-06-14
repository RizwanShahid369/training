<html>
<head>
    <title>Search  Students</title>
</head>
<body>
<h3>Search  Students Details</h3>
<p>You can search by Student name</p>
<form  method="post" action="include/DbFunction.php"  name="searchform">
    Enter Name <input  type="text" name="name">
    <input  type="submit" name="submitbtn" value="Search">
    <input type="hidden" name="action" value="search">
    
</form>
</body>
</html>