<?php

/* function callName() {
    print_r ("Rudson Augustin");
}

callName(); 
*/


/*
function fullName ($first, $last, $middleInt) {
    print("$first $last, $middleInt");
}

fullName("Michael", "Scott", "J");

echo "<br>";

function story($name, $year, $goal) {
    echo "$name was born on $year, his goal is to become a $goal. <br> It's going to be great!"; 
}

story("Rayleign Silvers", "1987", "janitor"); 
echo "<br>";

var_dump(story("Rayleign Silvers", "1987", "janitor"));
echo "<br>";

var_dump(75);
echo "<br>";

var_dump(["i", "am", "an", "small array"]);
*/



/*
function multiplyDiv($x, $y, $z, $v) {
    // ( ($x * $y) / ($z * $v) );
    return ( ($x * $y) / ($z * $v) ); 
    // return;
}

echo multiplyDiv(5,9,1,7); 
echo "<br>";

print multiplyDiv(5,9,1,3);
echo "<br>";

var_dump(multiplyDiv(5,9,1,7));

print_r("<br>");

print_r(multiplyDiv(5,9,1,7));
*/


// Define a function that takes one argument --in the code block return the value at the argument's position in an array. 
// Echo the return of the function call. 
function favFood($favF) {
    // $food = array("burgers", "pizza", "salad", "fries", "philly cheese");
    $food[0] = "burgers";
    $food[1] = "pizza";
    $food[2] = "salad";
    $food[3] = "fries";
    $food[4] = "philly cheese"; 

    // use square brackets to get the value 
    return array_search($favF, $food);
    // return $food[$favF]; 
}

echo favFood("philly cheese");
echo "<br>"; 

//Define an associative array.
// Try and define it externally and interally in the function and see difference

function favFood2($person) {
    $personFav = array("Peters" => "Big Mac", "Mike" => "Burgers", "Sara" => "Double Whooper w/ cheese", "Bing" => "Double Quarter Pounder w/ cheese", "John" => "Large Chicken Platter");

    return "$person" . "'s" . " favorite food is " . "$personFav[$person]";
    // return $personFav[$person];
}

echo favFood2("John"); 
echo "<br>"; 


function flowerFinder($flower) {
    $type = ["roses", "tulps", "daises", "sunflowers"]; 

    return $type[$flower];
}
echo flowerFinder("0");
?>

