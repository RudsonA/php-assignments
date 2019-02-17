
<!-- https://www.phpexercises.com/php-arrays-exercises.html -->
1 <br>
<?php
//PHP Arrays Ex. #1: Simple Array
    //Write an array variable of weather conditions with the following values: rain, sunshine, clouds, hail, sleet, snow, wind. Using the array variable for all the weather conditions, echo the following statement to the browser:

$weatherConditions = ["rain", "sunshine", "clouds", "hail", 'sleet', 'snow', 'wind'];

// echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weatherConditions[5] . 'and ' $weatherConditions[6] . '. Then came ' . $weatherConditions[1] . 'with a few ' . $weatherConditions[2] . ' and some ' . $weatherConditions[0] . ". At least we didn't get any" $weatherConditions[3] . " and " . $weatherConditions[4] . ".";

echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weatherConditions[5] and $weatherConditions[6]. Then came $weatherConditions[1] with a few $weatherConditions[2] and some $weatherConditions[0]. At least we didn't get any $weatherConditions[3] and $weatherConditions[4]";
echo "<br>";
?>

<br>
2
<br>
<!-- PHP Arrays Ex. #2: Simple Array Loop -->
<?php
//For this exercise, you will use a list of ten cities in the world. 
    //Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London.

$tenCities = ['Tokyo', 'Mexico City', 'NYC', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];

//Print these values to the browser separated by commas, using a loop to iterate over the array.
foreach ($tenCities as $cities) {
    print "$cities, ";
    echo "<br>";
}

//Sort the array, then print the values to the browser in an unordered list, again using a loop.
sort($tenCities);
echo "<ul>";
foreach ($tenCities as $ulCities) {
    print "<li> $ulCities </li>"; 
}
echo "</ul>";
echo "<br>";

//Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. 
array_push($tenCities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

//Sort the array again, and print it once more to the browser in an unordered list.
sort($tenCities);
print "<ul>";
foreach ($tenCities as $ulCities) {
    echo "<li> $ulCities </li>";
}
echo "</ul>";
echo "<br>";
?>
