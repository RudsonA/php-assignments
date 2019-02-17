
<!-- PHP Arrays Ex. #3: Arrays from User Input -->


<!-- Create a form asking the user for input about the weather the user has experienced in a month of the user's choice. In separate text fields, request the city, month and year in question. Below that, show a series of checkboxes using the same weather conditions you used in Arrays Ex. #1. (Those values were: rain, sunshine, clouds, hail, sleet, snow, wind.)  -->
<!-- Set up the form to create an array from the checked items. -->
<form action="" method="POST">
  <p><label> City </label> <input type="text" name="city" required></p>
  <p><label> Month</label> <input type="text" name="month" required> </p>
  <p><label> year</label> <input type="text" name="year" required> </p>
  <p> <label> Weather Conditions </label> </p>
  <p> <input type="checkbox" name="weather[]" value='rain'> Rain </p>
  <p> <input type="checkbox" name="weather[]" value='sunshine'> Sunshine </p>
  <p> <input type="checkbox" name="weather[]" value='clouds'> Clouds </p>
  <p> <input type="checkbox" name="weather[]" valu='hail'> Hail </p>
  <p> <input type="checkbox" name="weather[]" value='sleet'> Sleet </p>
  <p> <input type="checkbox" name="weather[]" value='snow'> Snow </p>
  <p> <input type="checkbox" name="weather[]" value='wind'> Wind </p>
  <p> <input type="submit" value="Submit"> </p>
  <p> <input type="reset" value="reset"> </p>
</form>

<?php
//Create an array using the city, month and year the user entered as values. Print the following response "In $city in the month of $month $year, you observed the following weather:", where $city, $month and $year are values from the array you created.
$arrWeather = array($_POST['city'], $_POST['month'], $_POST["year"]);
echo "<br>";
if ($_POST) {
    print "In $arrWeather[0] in the month of $arrWeather[1] ($arrWeather[2]), you observed the following weather: <br>";
    echo "<ul>";
    $weatherCond = $_POST['weather'];
    foreach ($weatherCond as $w) {
        echo "<li>$w</li>";
    }
    print "</ul>";
}

?>