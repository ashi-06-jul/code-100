let Chetan = {
    name: "my name is Chetan",
    age: 30,
    isActive: true
}

let Mayur = {
    name: "my name is Mayur",
    age: 28,
    isActive: true
}

let Gunjan = {
    name: "my name is Gunjan",
    age: 30,
    isActive: false
}

let users = new Map()
//console.log(typeof(users));

users.set("first", Chetan);
users.set("second", Mayur);
users.set("third", Gunjan);

// console.log(users);
// console.log(users.size);
// console.log(users.get("first"))

// console.log(users.keys());
// console.log(users.values());

// for(const key of users.keys()){
//     console.log(key);
//     console.log(users.get(key));
//     console.log(users.get(key).name);
    
// }

for (const [key, value] of users.entries()) {
    console.log(key +" : " + value.name);
    
    }