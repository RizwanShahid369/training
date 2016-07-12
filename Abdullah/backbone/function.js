



////////////////////////////////////delete//////////////////////////////////////



function del()
{


    //var val = document.getElementById("d_text").value;
    var a=document.getElementById("id").value;
    // document.write(a);
    var book2 = new Book({Id: a});
    book2.destroy({
        success: function (model, respose, options) {
            console.log("The model has deleted the server");
        },
        error: function (model, xhr, options) {
            console.log("Something went wrong while deleting the model");
        }
    });
}




/////////////////////////////////create////////////////////////////////////////////////
function create()
{


//        var Book = Backbone.Model.extend({
//            'Id':40,
//            'Courseteach':'abc',
//            'phonenumber':'08883',
//            'city':'lhr'
//        });

    var a=document.getElementById("Iqd").value;
    var b=document.getElementById("Courseteach").value;
    var c=document.getElementById("phonenumber").value;
    var d=document.getElementById("city").value;


    //console.log(a);
    var newBook = new Book({
        'Id':a,
        'Courseteach':b,
        'phonenumber':c,
        'city':d
    });
    newBook.save({
    },{
        // url:'http://localhost/apigility/public/teacher',
        type:'POST',
        success: function (model, respose, options) {
            console.log("The model has been saved to the server");
        },
        error: function (model, xhr, options) {
            console.log("Something went wrong while saving the model");
        }
    });



}
///////////////////////////////////read//////////////////////////


function read()
{



    var newbook1 = new Book({Id:31});
    newbook1.fetch({
        success: function (bookResponse) {
            console.log("Found the book: " + bookResponse.get("phonenumber"));
            console.log("Found the book: " + bookResponse.get("Id"));
            console.log("Found the book: " + bookResponse.get("Courseteach"));
            console.log("Found the book: " + bookResponse.get("city"));
        }
    });

}

//function edit(){
//   // var val = document.getElementById("d_text").value;
//    var f = new student({ id: 30 });
//    f.fetch({
//        success: function (obj) {
//            console.log("Found the book: " + obj.get("city"));
//
//            obj.set("city", "lhr" + "_updated");
//            obj.save({}, {
//                success: function (model, respose, options) {
//                    console.log("The model has been updated to the server");
//                },
//                error: function (model, xhr, options) {
//                    console.log("Something went wrong while updating the model");
//                }
//            });
//        }
//    });
//}




function Edit()
{



    var book1 = new Book({ Id: 31 });

    book1.fetch({
        type:'PUT',
        success: function (bookResponse) {
            console.log("Found the book: " + bookResponse.get("city"));
            // Let us update this retreived book now (doing it in the callback) [UPDATE]
            bookResponse.set("city", "lhr" + "_updated");
            bookResponse.save({}, {
                success: function (model, respose, options) {
                    console.log("The model has been updated to the server");
                },
                error: function(model, xhr, options)
                {
                    console.log("Something went wrong while updating the model");
                }

            });

        }

    });




}


