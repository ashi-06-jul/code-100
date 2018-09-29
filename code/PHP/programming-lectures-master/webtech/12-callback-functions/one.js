const todo =[];
todo.push("Make youtube video");
todo.push("Push JS code on Github");
todo.push("Next ML project to generate music");

todo.forEach(function(todoItem, index) {
    console.log(`Todo item at ${index} is ${todoItem}`);
    
});

//using arrow funciton
todo.forEach(element => {
    console.log(element);
    
});