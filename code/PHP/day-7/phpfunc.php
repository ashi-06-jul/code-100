<?php 
function greet(){
    echo "Hello Students!!!";
}
print("-----calling greet function-----<br>");
greet();

function sum($num1, $num2){
    $result = $num1+$num2;
    //print("Sum of $num1 and $num2 is : $result");
    return $result;
}
print("<br>-----calling sum function-----<br>");
print(sum(2,3));

// dafault value parameter function

function greetparam($name = "chetan"){
    print("Hello $name, how are you?");
}

print("<br>-----calling greetparam without parameter-----<br>");
greetparam();
print("<br>---calling greetparam with parameter-----<br>");
greetparam("Ravi");

$dummy_func = "greetparam";
print("<br>----See the magic---<br>");
$dummy_func("Magic");

function meranaamBadaHiAjeebHai(){
    print"Hurray!";
}
$myFun = "meranaamBadaHiAjeebHai";
$myFun();



?>