<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete form</title>
</head>
<body>

<form action="methods.php" method="post">
    <?php

    $regValue = $_GET['id'];
    ?>
    id to delete record.
    <input type="text" name="id" value=<?php echo htmlentities($regValue); ?>> <br><br>

    <input type="hidden" name="del" value="del">

    <button onclick="return myFunction() ">Try it</button>

    <script>
        function myFunction() {
            var x;
            if (window.confirm("Press a button!") == true) {

            } else {
   //             window.location.href('http://localhost/simple/include/methods.php');
                return false;
            }
            document.getElementById("demo").innerHTML = x;
        }
    </script>
</form>
</body>
</html>