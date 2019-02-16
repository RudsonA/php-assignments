
<!-- https://www.learnhowtoprogram.com/php/controlling-the-flow-of-php-code/exercises-foreach-loops -->

<?php

// Create an array of names 
$names = ["Michael", "Judah", "Rueben", "Abraham", 'Jacob', "Israeli", "Adam"];

//Print to the browser that each of them are biblical names. Use the p tag.
foreach ($names as $name) {
    echo $name . " is a biblical name" . "<br>";
}

// Create an array of the names of your favorite writers. 
$favWriters = ['Niccolo Machiavelli', 'Marley', 'Robert Greene'];

//Then use a foreach loop to print them to the browser with their letters reversed.
foreach ($favWriters as $writers) {
    echo "<br>" . strrev($writers) . "</br>";
}

//Create an array of numbers and multiply them together.
$arr = [1];

for ($x =0; $x < 11; $x++) {
    array_push($arr, rand(1,10));
}
print_r($arr);
echo "<br>";

/*
foreach ($arr as $num) {
    $num *= $num;
}
*/

print_r(array_product($arr));

?>