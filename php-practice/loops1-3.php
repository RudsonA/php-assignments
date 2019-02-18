<!-- https://www.phpexercises.com/php-exercises-control-structures.html -->
1 
<br>
<!-- PHP Control Structures Ex. #1: If-Else Statement -->
<?php
print date('F', time()) . "<br>";
if  (date("F", time()) === "August") {
    echo "It's August, so it's really hot.";
} else {
    echo "Not August, so at least not in the peak of the heat. <br>";
}
?>

2 
<br>
<!-- PHP Control Structures Ex. #2: Simple Loops -->
<?php
$a = "abc ";
$x = "xyz ";

function abc() {  
    $i = 0;
    while ($i < 9) {
        echo $GLOBALS["a"];
        $i++;
    }
    echo "<br>";
}

abc();

function xyz() {  
    $i = 0;
    do {
        echo $GLOBALS["x"];
        $i++;
    } while ($i < 8);
}

xyz(); 
echo "<br>";

function oneNine() {
    for ($i = 1; $i < 10; $i++) {
        echo $i . " ";
    }
    echo "<br>";
}

oneNine();
echo "<br>";

function item6() {
    echo "<ol>";
    $letters = range('A', "F");
    for ($i = 0; $i < 6; $i++) {
        echo "<li>Item $letters[$i]</li>";
    }
    echo "</ol>";
}

item6();
?>

<br>

3
<br>
<!-- PHP Control Structures Ex. #3: Simple For Loop -->
<?php
echo "<table>";
function twelve() {
    $b = $a * $a; 
    echo "<tr>";
    for ($a = 1; $a < 13; $a++) {
        echo "<td> $a </td>";

    }
    echo "<td> $b </td>";
}

twelve();

echo "</table>";

?>