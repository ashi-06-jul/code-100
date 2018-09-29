// Let's initialize an array consisting the names of family members

let family = ["chetan", "mayur", "gunjan", "shriyai"];

// print all the values of array
console.log(family);

// print value from a specific index
console.log(family[1]);

//print last element in array
console.log(family[family.length-1]);

//print all the values of array one by one
for(i =0; i<family.length; i++){
    console.log(family[i]);
    
}
family.forEach(function(element) {
    console.log(element);
  });

