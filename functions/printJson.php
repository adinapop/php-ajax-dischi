<?php

// I create a function to print in Json type the array
function printJson($arrayDiscs) {
    // I need it so the content-type is a Json and not an html text
    header('Content-Type: application/json');
    echo json_encode($arrayDiscs);
}

?>