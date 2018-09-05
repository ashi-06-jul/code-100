loggedIn = false;

userId = "chetanhere";

password = "password1";

// write a program to return
// 1 Welcome, you are logged in now.
// 2 Sorry, wrong id
// 3 Sorry, wrong password

while(true){

if(loggedIn == true){
    console.log("you are logged in");
    break;
    
}
else{

if(userId == "chetanhere" && password == "password1"){
    loggedIn = true;
}
else{
    console.log("You are not logged in");
    break;
    
}
}
}