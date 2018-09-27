<?php
$numbers = [1,2,3,4,15];
print_r($numbers);

$firstNumber = $numbers[0];
echo "<br>first number is : $firstNumber";

$firstNum_2 = reset($numbers);
echo "<br> First number by using reset function $firstNum_2";

$length = count($numbers);
echo "<br>length of array is $length";
$last_element = $numbers[$length -1];

echo "<br> Last element in array is $last_element";

$last_element_2 = end($numbers);

echo "<br> Last element by using end() function: $last_element_2<br>";

array_push($numbers, 25);
print_r($numbers)


?>