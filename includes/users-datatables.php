<?php

require 'dbh.inc.php';

$sql = "SELECT * FROM `accounts`";
$result = $mysqli->query($sql);

print_r($result);
while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];


echo json_encode($results);

 
?>