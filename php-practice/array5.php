
<!-- PHP Arrays Ex. #5: Associative Array -->

<?php
//This time, create an associative array, using the countries as keys, the cities as values. 
$countryCity = ["Japan" => "Tokyo", "Mexico" => "Mexico City", "USA" => "New York City", "India" => "Mumbai", "Korea" => "Seoul", "China" => "Shanghai", "Nigeria" => "Lagos", "Argentina" => "Buenos Aires", "Egypt" => "Cairo", "England" => "London"];
?>

<!-- Create a form for the user, with the instructions Please choose a city: 
Follow this request with a select field for the 10 cities, with the options created by looping through the array. When the user clicks the submit button, return the statement $city is in $country., where $city is the value chosen by the user, and $country is its key. -->
<form action="" method="post">
    <p><label for="cities">Please choose a city:</label></p>
    <select name="cities" required>
        <option value="">Choose a city</option>
        <option value="Tokyo">Tokyo</option>
        <option value="Mexico City">Mexico City</option>
        <option value="New York City">New York City</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Seoul">Seoul</option>
        <option value="Shanghai">Shanghai</option>
        <option value="Lagos">Lagos</option>
        <option value="Buenos Aires">Buenos Aires</option>
        <option value="Cairo">Cairo</option>
        <option value="London">London</option>
    </select> 
    <input type="submit" value="submit">
</form>

<?php
    if ($_POST) {
        $city = $_POST["cities"];
        $country = array_search($city, $countryCity);
        echo "$city is in $country";
    }
?>