var booksArray = ["phy", "chemistry", "BIO", "Urdu", "MATH"];
/**
 * making simple JS object
 *
 * @type {{height: number, length: number, width: number, volume: number,
  * material: string, content: string[], my prop: string, # of Books: number}}
 */
var myBox = {
    height: 6, length: 10, width: 7,
    volume: 500,
    material: "Cardboroard",
    content: booksArray,
    'my prop': "demo",
    "# of Books": 0
};
myBox.volume = myBox.length * myBox.height * myBox.width;
console.log(myBox.volume);
myBox.content.push("another book");
console.log(myBox.content);
console.log(myBox['my prop']);
// delete myBox['my prop'];
console.log("---------------------------" + myBox);
/**
 * performs the add functionality in the box object
 * @param box
 * @param name
 * @param writer
 */
function addBook(box, name, writer) {
    box["# of Books"]++;
    box["book" + box["# of Books"]] = {title: name, author: writer};
}

addBook(myBox, "the empires", "husnain zaheer");
addBook(myBox, "the demo book", "ahsan raza");
console.log(myBox);


var aquarium = {
    Nemo: {type: "fish", species: "clownfish", length: 3.7},
    Marlin: {type: "fish", species: "clownfish", length: 4.1},
    Dory: {type: "fish", species: "blue tang", length: 6.2},
    Peach: {type: "echinoderm", species: "starfish", length: 5.3},
    "Coral Castle": {type: "environment", material: "coquina", moves: false},
    "Dragon Statue": {type: "environment", material: "plastic", moves: false},
    addCritter: function (name, type, species, length) {
        this[name] = {type: type, species: species, length: length}
    }


};

aquarium.takeOut = function (name) {
    this[name].name = name;
    var temp = this[name];
    delete this[name];
    return temp;
}

aquarium.addCritter("my fish", "fish", "dont know", "3.9");
console.log(aquarium);
var fishOutOfWater = aquarium.takeOut("Nemo");
console.log(fishOutOfWater);
console.log(aquarium);

/**
 * constructor function examples
 *
 * @param shoeSize
 * @param shoeColor
 * @param forGender
 * @param constructStyle
 * @constructor
 */
function Shoe(shoeSize, shoeColor, forGender, constructStyle) {

    this.size = shoeSize;
    this.color = shoeColor;
    this.gender = forGender;
    this.construction = constructStyle;
}

Shoe.prototype = {
    putOn: function () {
        alert("yours " + this.construction + " on!");
    },
    takeOff: function () {
        alert("Uh, what’s that smell?");
    }
};

var beachShoe = new Shoe(10, "blue", "women", "flipflop");
beachShoe.putOn();


var Tornado = function (category, affectedAreas, windGust) {
    this.category = category;
    this.affectedAreas = affectedAreas;
    this.windGust = windGust;
}
var cities = [["Kansas City", 464310], ["Topeka", 127939], ["Lenexa", 49398]];
var twister = new Tornado("F5", cities, 220);
cities.push(["Olathe", 130045]);
/**
 * overriding toString in the Tornado
 *
 * @returns {string}
 */
Tornado.prototype.toString = function () {
    var list = "";
    for (var i = 0; i < this.affectedAreas.length; i++) {
        if (i < this.affectedAreas.length - 1) {
            list = list + this.affectedAreas[i][0] + ", ";
        } else {
            list = list + "and " + this.affectedAreas[i][0];
        }
    }
    return "This tornado has been classified as an " + this.category +
        ", with wind gusts up to " + this.windGust + "mph. Affected areas are: " +
        list + ", potentially affecting a population of " + this.valueOf() + ".";
}

// twister.toString();
console.log(twister.constructor);
// twister.constructor;