// Initialize a variable name score and assign a value equal to 0.

let score = 0;

// Let's assume that player is at a later stage of game and got updated to a new score.

score = 110;

// Let's assume, player also get some extra lifes and score in addition.

// here we have taken bonus as variable.

let bonus = 20;

bonus = 25; // Bonus updated by error, we should take this as const at the beginning in the program.

score = score * (100+bonus)/100;

console.log(score);

