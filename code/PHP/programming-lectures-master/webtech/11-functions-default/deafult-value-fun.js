let greeting = function(name){
    console.log("hello "+name+" how are you?");
    
}
greeting();

let greeting1 = function(name="student"){
    console.log("Hello "+name+ " How are you?");
    }
greeting1();

let greeting2 = function(name= "student", rollN = 0){
    console.log("Hello "+name+ " your roll number is "+rollN);
    
}
greeting2("chetan");