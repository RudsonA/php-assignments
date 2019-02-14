<?php 
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
echo "<br>Array Length = " . $arrayLength . "<br>";

while ($x < $arrayLength) {
    if (is_string($array5[$x]) == 1) {
        echo "Each string in the array: " . $array5[$x];
        echo "<br>";
    }
    $x++;
}

// Create a FOR loop that echos all string that have multiple words. --- use SWITCH case
echo "<br>Step 3";
echo "<br>";

$counterArray = [];
  for ($x = 0; $x < $arrayLength; $x++) {
    $arrayV = str_word_count($array5[$x], 0);
    echo "Array at position $x: $array5[$x]";
    echo "<br> string word count: " . $arrayV . "<br>";
    switch ($arrayV) {
        case $arrayV < 2:
            echo "<br>String word count is 0 or 1<br>";
        break;
        case 2:
            array_push($counterArray, $array5[$x]); //Using this for bonus assignment
            echo "<br>" . $array5[$x] . "<br>";
            break;
        default:
          echo "default";
          break;
    }
}

var_dump($counterArray);

?> 