
<!-- The prompt is to make an html form that submits data and PHP handles that data and echos something to the screen -->


<form method="post" action="">
    Data Submitter: <input type="text" name="data-submit">
    <input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dataSubmit = $_REQUEST["data-submit"];
    if (empty($dataSubmit)) {
        echo "No data!";
    } else {
        echo $dataSubmit;
    }
}

?>