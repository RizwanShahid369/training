
var Book = Backbone.Model.extend({
    defaults: {
        Id: "",
        Courseteach: "",
        phonenumber: "",
        city: ""
    },
    idAttribute: "Id",
    initialize: function () {
        document.write('Book has been initialized');
        this.on("invalid", function (model, error) {
            document.write("Houston, we have a problem: " + error)
        });
    },
    constructor: function (attributes, options) {
        document.write('Book\'s constructor had been called');
        Backbone.Model.apply(this, arguments);
    },
    validate: function (attr) {
        if (!attr.Id) {
            return "Invalid BookName supplied."
        }
    },
    urlRoot: 'http://localhost/apigility/public/teacher'
});