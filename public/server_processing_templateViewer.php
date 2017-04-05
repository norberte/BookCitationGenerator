<?php

use App\Book;


// DB table to use
$table = 'templates';

// Table's primary key
$primaryKey = 'tname';


// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$columns = array(
    array( 'db' => 'tname', 'dt' => 0 )
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'ag4f29hely7up',
    'db'   => 'bookcat',
    'host' => 'localhost'
);



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require('ssp.class.php');

echo json_encode(
    \SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns)
);
