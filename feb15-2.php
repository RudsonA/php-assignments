
<form method="POST" action="feb15-2.php"> 
    Username: <input type="text" name="user" required>
    Email:    <input type="email" name="email" reqwuired>
    Password: <input type="password" name="pass" required> 
    <input type="submit" name="submit" value="submit"> 
</form> 

<?php

$name = $pass = $email = ""; 

function dataInput($data) {
    $data = trim($data);
    $data = htmlspecialchars($data); 
    $data = stripslashes($data); 
    return $data; 
}

if ($_POST) {
    $user = dataInput($_POST['user']);
    $email = dataInput($_POST['email']);
    $pass = dataInput($_POST['pass']);
    echo $user;
    echo $email;
    echo $pass; 
}

?> 