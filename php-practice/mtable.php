<link rel="stylesheet" href="mtable.css">

<?php

echo "<table>";

for ($r = 1; $r < 11; $r++) {
    echo "<tr>";
    for ($c = 1; $c < 11; $c++) {
        // echo "<td>";
        // echo $r*$c;
        // echo "</td>";
        echo "<td>" . $r*$c . "</td>"; 
    }
}

echo "</table>";
?>