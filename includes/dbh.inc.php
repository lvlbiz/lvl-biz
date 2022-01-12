<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u317500774_lvlbiz');
define('DB_PASSWORD', '=g*+:Zvq4N>f');
define('DB_NAME', 'u317500774_lvlbiz');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>