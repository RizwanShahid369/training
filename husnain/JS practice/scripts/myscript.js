/**
 * loops practice
 *
 * @type {number}
 */
var trainNumber = 1;
while (trainNumber <= 8) {

    console.log("Train # " + trainNumber + " is running.");
    trainNumber++;
}

/**
 * practicing built in functions
 *
 * @type {boolean}
 */

var gotName = false;
while (gotName == false) {
    var userName = prompt("Whats your name ?");
    if (confirm("are you sure your name is " + userName)) {
        alert("Thank you " + userName);
        gotName = true;
    }
}
/**
 * Custom functions example
 *
 * @param a
 * @param b
 * @returns {*}
 */

function sum(a, b) {

    return a + b;

}

alert("sum is " + sum(3, 5));

/**
 * array examples
 *
 * @type {number[]}
 */
var numberList = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

for (var i = 0; i < numberList.length; i++) {

    if (!(numberList[i] % 2 == 0)) {
        numberList[i] = undefined;
    }
}
console.log(numberList);

/**
 * array manipulations
 *
 * @param name
 * @param list
 * @returns {*}
 */

function deletePassenger(name, list) {

    if (list.length == 0) {

        console.log("List is empty, dude!");

    } else {


        for (var i = 0; i < list.length; i++) {
            if (list[i] == name) {
                list[i] = undefined;
                return list;
            } else if (i == list.length - 1) {

                console.log("Passenger not found!")
            }

        }
    }
    return list;
}

/**
 * simple function expression
 *
 * @param a
 * @param b
 * @returns {number}
 */

var diff = function differenceFunction(a, b) {
    return a - b;

}

console.log("difference is " + diff(10, 3));

/**
 * function expression with map
 *
 */
var numbers = [1, 3, 5, 6, 7, 8, 9, 12, 45, 67, 8];

var result = numbers.map(function (val) {
    return val * 2;

});
console.log("doubled array is " + result);

/**
 * Closure example
 *
 * @param transport
 * @returns {Function}
 */

function buildCoveTicketMaker(transport) {
    var passengerNumber = 0;
    return function (name) {
        passengerNumber++;
        alert("Here is your transportation ticket via the " + transport + ".\n" +
            "Welcome to the Cold Closures Cove, " + name + "!" + "you are passenger # " + passengerNumber);
    }
}

var getSubmarineticket = buildCoveTicketMaker("Submarine");
getSubmarineticket("husy");
getSubmarineticket("bilal");
getSubmarineticket("ahmad");

/**
 * Hoisting Example
 *
 * @param numPassengers
 * @param capacity
 */

function capacityStatus(numPassengers, capacity) {

    var noSeats = function () {

        alert("no seats left");
        return false;
    }

    var seatAvailable = function () {
        alert("there are " + (capacity - numPassengers) + " seats available");
        return true;

    }

    if (numPassengers == capacity) {
        noSeats();
    } else {
        seatAvailable();
    }
}
capacityStatus(57, 60);