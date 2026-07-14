<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";      // EMPTY
$DB_NAME = "food_waste";

$connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if(!$connection){
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
