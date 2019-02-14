<?php

$ourArray = ["jumpin" => "candy", "kiddy" => 2, "birdie" => 3]; //birdie was missing a closing quotation mark. 

function arrayRun ($position, $ourArray) {
    
    $GLOBALS["ourArray"];

    return $ourArray[$position];
}

echo arrayRun("birdie", $ourArray);
echo "<br>"; 

echo arrayRun("jumpin", $ourArray);
echo "<br>";

echo arrayRun("kiddy", $ourArray);
echo "<br>";

?>