<?php 
// Step 1: Create a variable and set to a string

$string = "variable to a string <br>";

// Step 2: echo that variable 

echo $string;

// Step 3: Concatenate html tags to youur string and set to a new variable 

$stringCon = $string . " <div>";

// echo new variable 

echo $stringCon;

// variable dump new variable 

var_dump($stringCon);

echo "<img src='ab.jpeg'>"
?> 