<DOCTYPE html>
<html>
<head>

</head>
<body>
Insert id <input type="text" id="id">
<input type="submit" id="getButton">
<div id="out1"></div>
<div id="out"></div>
<div id="out2"></div>

Name <input type="text" id="name"><br>
Father Name <input type="text" id="fname"><br>
DOB <input type="text" id="dob"><br>
Class <input type="text" id="class"><br>
Address <input type="text" id="add"><br>
City <input type="text" id="city"><br>
School <input type="text" id="sch">
<input type="submit" id="postButton"><br>
<input type="submit" id="putButton" value="Update"><br>
<input type="submit" id="delButton" value="Delete"><br>
</body>
</html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        $('#getButton1').click(function() {
            var id= $("#id").val();
            $.ajax({
                type: "GET",
                url: "http://localhost/apigility/public/students/" + id,
                dataType: "json",
                success: function (data) {
                    $("#out1").html("Name").append(' ' + "Father Name").append(' ' + "Address");
                    $("#out").html(data.name).append(' ' + data.Father_Name).append(' ' + data.address);
                },
                error: function (data) {
                    alert("Request Failed");
                }

            });

        });

        $('#postButton').click(function() {
            var name= $("#name").val();
            var fname= $("#fname").val();
            var dob= $("#dob").val();
            var clas= $("#class").val();
            var address= $("#add").val();
            var city= $("#city").val();
            var sch= $("#sch").val();

            $.ajax({
                type: "POST",
                url: "http://localhost/apigility/public/students",
                dataType: "json",
                data: JSON.stringify({
                    "name":name,
                    "Father_Name":fname,
                    "dob":dob,
                    "class":clas,
                    "address":address,
                    "city":city,
                    "school":sch,
                }),
                contentType:"application/json",
                success: function (data) {
                    alert("Data Posted!");
                    $("#out2").html("Data Posted!");
                },
                error: function (data) {

                    alert("Request Failed");
                }

            });

        });

        $('#delButton').click(function() {
            var id = $("#id").val();

            $.ajax({
                type: "DELETE",
                contentType: "application/json",
                dataType: "json",
                url: "http://localhost/apigility/public/students/" + id,
                success: function (data) {
                    alert("Record Deleted!");
                },
                error: function (data) {

                    alert("Request Failed");
                }

            });

        });

        $('#putButton').click(function() {
            var id = $("#id").val();
            var name= $("#name").val();
            var fname= $("#fname").val();
            var dob= $("#dob").val();
            var clas= $("#class").val();
            var address= $("#add").val();
            var city= $("#city").val();
            var sch= $("#sch").val();

            $.ajax({
                type: "PUT",
                contentType: "application/json",
                dataType: "json",
                url: "http://localhost/apigility/public/students/" + id,
                data: JSON.stringify({
                    "id":id,
                    "name":name,
                    "Father_Name":fname,
                    "dob":dob,
                    "class":clas,
                    "address":address,
                    "city":city,
                    "school":sch,
                }),
                success: function (data) {
                    alert("Updated!");
                },
                error: function (data) {

                    alert("Request Failed");
                }
            });

        });
    </script>

