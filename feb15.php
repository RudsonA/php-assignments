

<form method="post" action="feb15.php"> 
    <label>Username:</label> <input type="text" name="userN" required> <br>
    <label>Email:</label> <input type="text" name="email" required> <br>
    <label>Password:</label> <input type="password" name="passW" required> <br>
    <input type="submit" value="Submit" name="sign"> 
</form>


<?php
/*
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
if ($_POST) {   
    if (stripslashes(trim($_POST["userN"])) === "hi" && stripslashes(trim($_POST["passW"])) === "there") {
        echo "Welcome!"; 
    } else {
        echo "Not Welcomed!";
    }

    // if ($_POST['userN'] === "hi" && $_POST["passW"] === "there") {
    //     echo "Welcome!";
    // } else {
    //     echo 'Not Welcomed!';
    // }
}

*/

$user = $email = $pass = "";
// $user = '';
// $email = '';
// $pass = '';

function inputCheck($data) {
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_POST) {
    $user = inputCheck($_POST["userN"]);
    $email = inputCheck($_POST['email']);
    $pass = inputCheck($_POST['passW']);
    echo $user;
    echo $email;
    echo $pass; 
}


?>
