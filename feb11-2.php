<!-- Second assignment -->
<?php
// Step 1: Create a variable and set as empty object

// class obj1ect {
    
// }
// $obj1 = new obj1ect();
class obj1ect{};

$obj1 = new obj1ect;

// Step 2: Create a variable with an empty array
$arr = [];


// Step 3: Add a string to array
array_push($arr, "String");

// Step 4: Add array as a value to object
$obj1 = new ArrayObject(array($arr));

// Step 5: Add an integer as a new position in array
array_push($arr, 13); 

// Step 6: Echo Object
echo SERIALIZE($obj1); //strval($oneObj); 
echo "<br>";

// Step 7: Echo array in object
echo SERIALIZE($arr);
echo "<br>";

// Var_dump ARRAY
var_dump($arr);
echo "<br>";

// Var_dump object
var_dump($obj1); 
echo "<br>"; 

// Bonus 1: Add 500 to last index of Array
array_push($arr, 500);
echo SERIALIZE($arr); 
echo "<br>";

//Bonus 2: Reverse string in object as new property
// use strrev
?>