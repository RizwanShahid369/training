<html>
<head>
    <title>my page</title>
</head>
<body>
Teacher ID: <input name="teacher-id" id="teacher-id">
<button name="get-teacher-btn" id="get-teacher-btn" >Get Teacher</button><br>
<br>
Teacher Name: <input name="teacher-name" id="teacher-name"><br>
Teacher Designation: <input name="teacher-designation" id="teacher-designation"><br>
<button name="update-teacher-btn" id="update-teacher-btn" >Update</button>
<button name="insert-teacher-btn" id="insert-teacher-btn" >insert</button>
<button name="delete-teacher-btn" id="delete-teacher-btn" >Delete</button>


<div id="res"></div>
</body>
</html>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>


$('#get-teacher-btn').click(function() {
var id= $("#teacher-id").val();
$.ajax({
type: "GET",
url: "http://localhost/apigility/public/teacher/" + id,
dataType: "json",
processdata: true,
success: function (data) {
console.log("Request Succeed!");
var result = data.name;
$("#res").html(result).append(' ' + data.designation);
},
error: function (data) {

alert("Request Failed");
}

});

});


$('#insert-teacher-btn').click(function() {
    var name = $("#teacher-name").val();
    var designation = $('#teacher-designation').val();
    $.ajax({
        type: "POST",
        url: "http://localhost/apigility/public/teacher",
        dataType: "json",
        data: JSON.stringify({
            "name":name,
            "designation":designation
        }),
        contentType: "application/json",
        success: function (data) {
            console.log("Request Succeed!");
            $("#res").html(data);
        },
        error: function (data) {

            alert("Request Failed");
        }

    });

});



$('#update-teacher-btn').click(function() {
    var id = $('#teacher-id').val();
    alert(id);
    var name = $("#teacher-name").val();
    var designation = $('#teacher-designation').val();
    $.ajax({
        type: "PUT",
        contentType: "application/json",
        dataType: "json",
        url: "http://localhost/apigility/public/teacher/" + id,
        data: JSON.stringify({
            "name":name,
            "designation":designation
        }),
        success: function (data) {
            console.log("Request Succeed!");
            $("#res").html(data);
        },
        error: function (data) {

            alert("Request Failed");
        }

    });

});


$('#delete-teacher-btn').click(function() {
    var id = $('#teacher-id').val();
    alert(id);
    $.ajax({
        type: "DELETE",
        contentType: "application/json",
        dataType: "json",
        url: "http://localhost/apigility/public/teacher/" + id,
        success: function (data) {
            console.log("Request Succeed!");
            $("#res").html(data);
        },
        error: function (data) {

            alert("Request Failed");
        }

    });

});




</script>