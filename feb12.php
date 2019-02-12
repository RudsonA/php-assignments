<!-- Loop through an array and if -->
<?php

// Create a variable, set it to an array with 5 items 
/* 
    -1 item should be a single word string
    -2 At least one item should be multiple words
    -3 At least one item has an integer 
*/ 

echo "Step 1";
echo "<br>";
$array5 = ["word", "Miami Dolphins", "One Piece", 23, "Five"];
print_r($array5);
echo "<br>"; 

// Create a WHILE loop and iterate over your array
//  -in that loop make an if else statement that echos all array positions that have strings
$x = 0;
$arrayLength = count($array5);

// echo is_string($array5[$x]);
echo "<br>";

echo "Step 2";
echo "<br>";

while ($x < $arrayLength) {
    if (is_string($array5[$x]) == 1) {
        echo $array5[$x];
        echo "<br>";
    } else {
        // break;
    }
    $x++;
} 
echo "<br>"; 

// Create a FOR loop that echos all string that have multiple words. --- use SWITCH case
echo "Step 3";
echo "<br>";
$counter = [];
for ($x = 0; $x < $arrayLength; $x++) {
    switch ($x) {
        case str_word_count($array5[$x], 0) > 1:
            array_push($counter, $array5[$x]); //Using this for bonus assignment
            echo $array5[$x]; 
            echo "<br>"; 
            break;
        default: 
            break; 
    }
}

// echo (str_word_count($array5[$x], 0) > 1);

//Bonus: Create a counter that counts how many strings have multiple words

// for ($x = 0; $x < $arrayLength; $x++) {
//     switch ($x) {
//         // case str_word_count($array5[$x], 0) > 1:
//         case $x < $arrayLength: 
//              array_push($counter, $array5[$x]);
//             break;
//         default:
//             break; 
//     }
// }
// echo $counter;
// echo SERIALIZE($counter);
// var_dump($counter);
echo "<br>";
print_r($counter); //ONLY PRINT WORKS
echo "<br>";
print_r(count($counter));

?> 