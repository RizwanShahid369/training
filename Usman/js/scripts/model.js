var student = Backbone.Model.extend({
    defaults: {
        name: "default",
	dob: "default",
        Father_Name: "default",
        class: "1",
        address: "default",
        city: "default",
        school: "default"
    },
    idAttribute: "id",
    initialize: function () {
        console.log('Student data is ready');
        this.on("invalid", function (model, error) {
            console.log("Student, we have a problem: " + error)
        });
    },
    constructor: function (attributes, options) {
        console.log('Student\'s constructor had been called');
        Backbone.Model.apply(this, arguments);
    },
    validate: function (attr) {
        if (!attr.name) {
            return "Invalid BookName supplied."
        }
    },
    urlRoot: 'http://localhost/apigility/public/students',
});
