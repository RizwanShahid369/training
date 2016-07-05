var Teacher = Backbone.Model.extend({
    defaults: {
        name: "Not Set",
        designation: "Not Set"
    },
    idAttribute: "id",
    initialize: function () {
        console.log('Teacher has been initialized');
        this.on("invalid", function (model, error) {
            console.log("A problem has occurred: " + error);
        });
    },
    constructor: function (attributes, options) {
        console.log('Teacher constructor had been called');
        Backbone.Model.apply(this, arguments);
    },
    urlRoot: 'http://localhost/apigility/public/teacher'
});
