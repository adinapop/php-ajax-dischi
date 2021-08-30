<?php

// I require the database array
require_once __DIR__ . "/../database/discsDb.php";

// I require the function that print the array in Json
require_once __DIR__ . "/../functions/printJson.php";

printJson($discs);

/*

I could have written this directly here, without doing the function:
    
    header('Content-Type: application/json');
    echo json_encode($array);

*/


?>