<!-- https://www.phpexercises.com/php-add-user-input-array-exercise.html -->
<!-- PHP Arrays Ex. #4: Add User Input to Array -->

<?php
//Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway. 
$transportation = ["Automobile", "Jet", "Ferry", "Subway"];

//Print the following statement to the browser: 
print "Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation:";
echo "<br>";

//Follow this with an unordered list created by iterating through the array variable you created.
echo "<ul>";
sort($transportation);
foreach ($transportation as $t) {
    echo "<li> $t </li>";
}
echo "</ul>";
?>

<!-- Next, give the user a text box and ask the user to add other modes of transportation to the list, separated by commas. When the user clicks 'Go', process the input with array functions to send back the original list with the user's additions -->
<div>
    <form action="" method="get">
        <p> <label> Enter other modes of transportation separated with a comma:</label> <input type="text" name="add"> </p>
        <p> <input type="submit" value="Go"> </p>
    </form>
</div>
<?php
if ($_GET) { 
    array_push($transportation, $_GET["add"]);
    print_r($transportation); 
}

?>