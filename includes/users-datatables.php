<?php
require 'dbh.inc.php';
$table = 'accounts';
 
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'username', 'dt' => 0 ),
    array( 'db' => 'usertype',  'dt' => 1 ),
    array( 'db' => 'created_at',   'dt' => 2 ),
);
 
$sql_details = array(
    'user' => DB_USERNAME,
    'pass' => DB_PASSWORD,
    'db'   => DB_NAME,
    'host' => DB_SERVER
);
 
require( 'datatables/ssp.class.php' );
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>