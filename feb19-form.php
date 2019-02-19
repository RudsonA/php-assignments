<?php
if($_POST) {   
    $cookie_name = $_POST["user"]; 
    // $cookie_value = $_POST["user-number"];
    setcookie($cookie_name, "", time() + 86400, "/");
}
?>

<?php 
include "feb19-header.php"; 
?>

<section>
    <form action="feb19-form.php" method="post">
        <label>User Input</label>
        <input type="text" name="user"> 
        <!-- <label>Enter a Number:</label>
        <input type="text" name="user-number"> <br> -->
        <input type="submit" value="Submit">
    </form>
</section>
 
<?php
if (!empty($_POST) && isset($_POST["user"])) {
    $userInput = $_POST["user"];  
    if (filter_var($_POST["user"], FILTER_SANITIZE_STRING)) {
        include "feb19-welcome.php";
    } else {
        echo "Invalid!"; 
        setcookie($cookie_name, "", time() + 86400, "/");
    }
}
?>