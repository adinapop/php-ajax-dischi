<?php

require_once __DIR__ . "/../database/discsDb.php";
require_once __DIR__ . "/../functions/printJson.php";

// create a variable which contains the genre disc, so I can use it on my function
$genreType = $_GET["$genre"];

// filter the array discs with array_filter() function => $arrayName, $function($argument), $varToUse
$filteredDiscsDb = array_filter($discs, function($disc) use($genreType) {
    return $disc['genre'] === $genreType;
});

// function to print the filtered array in Json content-type
printJson($filteredDiscsDb);
// var_dump($filteredDiscsDb);

?>