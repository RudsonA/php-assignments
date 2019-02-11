<!-- Second assignment -->
<?php
// Step 1: Create a variable and set as empty object

class emptyObject {
    
}
$emptyObj = new emptyObject();

// Step 2: Create a variable with an empty array
$emptyArr = [];


// Step 3: Add a string to array
array_push($emptyArr, "String");

// Step 4: Add array as a value to object
$emptyObj = new ArrayObject(array($emptyArr));

// Step 5: Add an integer as a new position in array
array_push($emptyArr, 13); 

// Step 6: Echo Object
echo SERIALIZE($emptyObj); //strval($oneObj); 
echo "<br>";

// Step 7: Echo array in object
echo SERIALIZE($emptyArr);
echo "<br>";

// Var_dump ARRAY
var_dump($emptyArr);
echo "<br>";

// Var_dump object
var_dump($emptyObj); 

?>