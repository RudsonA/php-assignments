
<!-- Homework tonight is to create a username/password authentication system -->

<form method="post" action="" >
        <label>Username:</label> <input type="text" name="username">
        <label>Password:</label> <input type="password" name="password">
        <input type="submit" value="sign" name="sign">
</form>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // $userN = $_REQUEST['username'];
        // $passW = $_REQUEST['password'];
        // $validUser = $userN == "one" && $passW == "piece"; 

        $userN = $_POST["username"];
        $passW = $_POST["password"];

        // if ($userN == "one") {
        //     if ($passW == "piece") {
        //         echo "You've signed in!";
        //     } else {
        //         echo "Invalid username/password";
        //     }
        // } else {
        //     echo "Invalid username/password";
        // }
        
        /* if (!$validUser) {
            echo "Invalid username/password";
        } else {    
            echo "You've signed in!";     
        } */

        if ($userN == "one" && $passW="piece") {
            echo "You've signed in!";     
        } else {
            echo "Invalid username/password";
        }
    }

?>