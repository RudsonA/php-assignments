
<?php
$users = ["luffy", "zoro", "mihawk", "rayleigh"]; 

$counter = 0; 

foreach ($users as $user) {
    if ($user === $userInput) {
        echo "You're in!";
        setcookie($cookie_name, "", time() + 86400, "/"); 
        break; 
    }  else {
        $counter++;
    }
}

if ($counter === count($users)) {
    echo "nOPE";
    setcookie("user", "", time() + 86400, "/");
}
?>