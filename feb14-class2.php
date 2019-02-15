<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $datasubmit = $_REQUEST['data-submit']; 
    if (empty($datasubmit)) {
        echo "No Input";
    } else {
        echo $datasubmit;
    }
}


?>