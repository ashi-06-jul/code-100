// We are writing a program to convert celcius to Farenhite.

// Initialize celsius variable here
// npm install readline-sync
let readline = require('readline-sync'); // this readline sync is a good module to start with.

let celsius;

celsius = readline.question("put temp in Celsius:");

// write the equation to convert celsius to farenhite

// Tf = Tc * (9/5) + 32

// convert it to program to pass it to your computer.

let farenhite;

farenhite = celsius * (9/5) + 32;

// print result to console.

console.log(celsius + " C is equal to "+ farenhite + " F");
