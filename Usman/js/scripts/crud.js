function create(){
var book = new student({name:"a", dob: "1", Father_Name:"a", addrsss:"s", class:"1",city:"d",school:"d"});
book.save({}, {
    success: function (model, respose, options) {
        console.log("The model has been saved to the server");
    },
    error: function (model, xhr, options) {
        console.log("Something went wrong while saving the model");
    }
});
}

// Now let us try to retrieve a book [READ]
function read(){
var book1 = new student({ id: "52" });
book1.fetch({
    success: function (obj) {
        console.log("Found the book: " + obj.get("name"));
    }
});
}

// Lets try to update a book [UPDATE]
function edit(){
    var val = document.getElementById("d_text").value;
var f = new student({ id: val });
f.fetch({
    success: function (obj) {
        console.log("Found the book: " + obj.get("name"));
        
        obj.set("name", "Usman" + "_updated");
        obj.save({}, {
            success: function (model, respose, options) {
                console.log("The model has been updated to the server");
            },
            error: function (model, xhr, options) {
                console.log("Something went wrong while updating the model");
            }
        });
    }
});
}

function del(){
// Let us delete the model with id 13 [DELETE]
    var val = document.getElementById("d_text").value;

var d1 = new student({ id: val });
d1.destroy({
    success: function (model, respose, options) {
        console.log("The model has deleted the server");
    },
    error: function (model, xhr, options) {
        console.log("Something went wrong while deleting the model");
    }
});
}
