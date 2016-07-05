alert("There");
console.log("Train #" + 1 + " is running.");

var trainsOperational = 8;
trainsOperational = trainsOperational + 4;
console.log("There are " + trainsOperational + " running trains.\n");

var $in=1;
while($in<5)
{
    console.log("Using " +$in+" while loop ");
    $in++;
}

for( $in=1; $in < 5; $in++ )
{
    if ($in==3) {
        console.log(" Yes " +$in);
    }
    console.log("Using " +$in+" for loop ");
}

if(confirm("Are you sure?")){
    var h = prompt("What soul hath allowed the canines to exit?");
    if(h==null)
    {
        alert("NULL");
    } else {
        alert("N OK");
    }
} else {
    alert("Ni");
}

var x = 6;
var y = 4;

function add (a, b){

    var x = a + b;
    return x;
}

function subtract (a, b){
    y = a - b;
    return y;
}
console.log(add(x,y));
console.log(subtract(x,y));

var passengers = [ "Gregg Pollack", "Aimee Simone", "Thomas Meeks",
    "Olivier Lacan", "Jon Friskics", "Ashley Smith"];

console.log(passengers[0]);
for( $in=0; $in < passengers.length; $in++ )
{
    console.log("Using " +passengers[$in]+" for loop ");
}

passengers.pop();

for( $in=0; $in < passengers.length; $in++ )
{
    console.log("Using " +passengers[$in]+" for loop ");
}

passengers.push("Usman");

for( $in=0; $in < passengers.length; $in++ )
{
    console.log("Using " +passengers[$in]+" for loop ");
}

passengers[2]=undefined;
if (passengers[2]==undefined) {
alert("undefineds");
}

for( $in=0; $in < passengers.length; $in++ )
{
    console.log("------Using " +passengers[$in]+" for loop ");
}

var diff = function (x, y) {
    return x - y;
};
console.log("This "+diff(9,3));

var greeting = function () {
    alert("Thanks for visiting the Badlands!\n" +
        "We hope your stay is...better than most.");
};
closeTerminal( greeting );
function closeTerminal( message ){

}

var numbers = [12, 4, 3, 9, 8, 6, 10, 1];
var results = numbers.map( function (arrayCell) {
    console.log(arrayCell);
        return arrayCell * 2;
    }
);
console.log(results);

var sweetAnnouncement = function () { alert("ATTENTION!\n CUPCAKES.\n\n...THAT IS ALL.") };
sweetAnnouncement();
var arr1 = [1, 2, 3];
var arr2 = [4, 5, 6];
var arr3 = [arr1, arr2];
console.log(arr3[1]);

var qu = [];
qu.push("1");
qu.push("2");
qu.push("3");
qu.push("4");
qu.push("5");

console.log(qu);
console.log(qu.shift());
console.log(qu);


var parkRides = [ ["Birch Bumpers", 40] , ["Pines Plunge", 55],
    ["Cedar Coaster", 20] , ["Ferris Wheel of Firs", 90] ];
console.log(parkRides[1][0]);

function close(i){
console.log("Hi");
}

(function () {
    console.log("-I.F-");
})();

(function () {
    console.log("-I.F 2-");
})();


close(2);


function retclose(){
    var i=20;
    console.log("Return Function");
    return function () {
        alert(i + " Value ");
    }
}

vari = retclose();
vari();


function cls(){
    console.log("Called");
    return 2;
}

var v = cls();
//v();  // Error v is not a function

//Objects

var booksArray = ["Great Expectations", "The Remains of the Day", "Peter Pan"];
var myBox = { height: 6, width: 8, length: 10, volume: 480 ,
    material: "cardboard",
    //contents: ["Great Expectations", "The Remains of the Day", "Peter Pan"]
    contents: booksArray
};

console.log(myBox.height);
myBox.height = 12; //modify
myBox.contents.push("On The Road");     //modify

console.log(myBox["volume"]);
//addition of properties
myBox.weight = 24;
myBox.destination1 = "Orlando";
myBox.destination2 = "Miami";
myBox["# of stops"] = 2;

//Deletion
delete myBox.contents;
delete myBox.nonexistentProperty; //Confirming

//Objects within Objects
var aquarium = {
    Nemo: { type: "fish", species: "clownfish", length: 3.7 },
    Marlin: { type: "fish", species: "clownfish", length: 4.1 },
    Dory: { type: "fish", species: "blue tang", length: 6.2 },
    Peach: { type: "echinoderm", species: "starfish", length: 5.3 },
    "Coral Castle": { type: "environment", material: "coquina", moves: false },
    "Dragon Statue": { type: "environment", material: "plastic", moves: false },

    addCritter: function ( name, type, species, length ){
        this[name] = {type: type, species: species, length: length};
    }
};

aquarium.addCritter("Bubbles", "fish", "yellow tang", 5.6);

aquarium.takeOut = function ( name ) {
    var temp = this[name];
    delete this[name];
    return temp;
};

var fishOutOfWater = aquarium.takeOut("Marlin");
console.log( fishOutOfWater );

aquarium.takeOut = function ( name ) {
    this[name].name = name;//this will create a new property inside that particular object
    var temp = this[name];
    delete this[name];
    return temp;    //to display which property is deleted
};
aquarium.countFish;
var numFish = 0;
for ( var key in aquarium ) {
    if (aquarium [key].type == "fish") {
    }
}

//Other way
aquarium.countFish = function() {
    var numFish = 0;
    for ( var key in this ) {
        if (this [key].type == "fish") {
        }
    }
    return numFish;
}

aquarium.countFish();
var dor = "There’s no place like home.";
String.prototype .countAll = function ( letter ){
    var letterCount = 0;
    for (var i = 0; i<this.length; i++) {
        if ( this.charAt(i).toUpperCase() == letter.toUpperCase() ) {
            letterCount++;
            console.log(letterCount);
        }
        }
    return letterCount;
    };

console.log(dor.countAll("e"));
//Objects
var shoe = { size: 6, gender: "women", construction: "slipper"};
var magicShoe = Object.create( shoe );
console.log(magicShoe);

magicShoe.jewels = "ruby";
magicShoe.travelAction = "click heels";
magicShoe.actionsRequired = 3;
console.log(magicShoe);

console.log(Object.prototype.isPrototypeOf(shoe));
console.log(shoe.isPrototypeOf ( magicShoe ));
console.log(magicShoe .isPrototypeOf ( shoe ));

console.log("Implementation");

function Shoe (shoeSize, shoeColor, forGender, constructStyle) {
    this.size = shoeSize;
    this.color = shoeColor;
    this.gender = forGender;
    this.construction = constructStyle;
}

Shoe.prototype= {
    putOn: function () { alert ("Your"+ this.color+"Shoe’s on!");},
    takeOff: function () { alert ("Uh, looks like"+this.gender); }
};

var beachShoe = new Shoe( 10, "blue", "women", "flipflop" );
beachShoe.takeOff();
console.log(beachShoe.hasOwnProperty("construction"));

//Constructors can be function expressions, too!

var Tornado = function (category, affectedAreas, windGust) {
    this.category = category;
    this.affectedAreas = affectedAreas;
    this.windGust = windGust;
};

var cities = [ ["Kansas City", 464310], ["Topeka", 127939], ["Lenexa", 49398] ];
var twister = new Tornado( "F5", cities, 220 );
console.log(twister.valueOf());

//Overriding properties
Tornado.prototype.valueOf = function( ) {
    var sum = 0;
    for (var i = 0; i < this.affectedAreas.length; i++) {
        sum += this.affectedAreas[i][1];
    }
    return sum;
}
console.log(twister.valueOf());
console.log(twister.__proto__);

Object.prototype.findOwnerOfProperty = function ( propName ) {
    var currentObject = this;
    while (currentObject !== null){
        if (currentObject.hasOwnProperty(propName)) {
            return currentObject;
        }
        else {
            currentObject = currentObject.__proto__;
        }
    }
    return "No property found!";
};
console.log(twister.findOwnerOfProperty("valueOf"));
console.log(twister.findOwnerOfProperty("abc"));
//      toString
var a = [ 3, "blind", "mice" ];
a.toString();

var double = function ( param ){

    return param *2;
};
double.toString();