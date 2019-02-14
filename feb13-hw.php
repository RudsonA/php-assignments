<?php

$ourArray = ["jumpin" => "candy", "kiddy" => 2, "birdie" => 3]; //birdie was missing a closing quotation mark. 

function arrayRun ($position, $ourArray) {
    
<<<<<<< HEAD
    $GLOBALS["ourArray"];
=======
    
>>>>>>> c52210aab33475a2ff7bdf4a9b4c34222076dabf

    return $ourArray[$position];
}

<<<<<<< HEAD
echo arrayRun("birdie", $ourArray);
echo "<br>"; 

echo arrayRun("jumpin", $ourArray);
echo "<br>";

echo arrayRun("kiddy", $ourArray);
echo "<br>";
=======
echo arrayRun(0);

echo arrayRun("jumpin");

echo arrayRun("kiddy");
>>>>>>> c52210aab33475a2ff7bdf4a9b4c34222076dabf

?>