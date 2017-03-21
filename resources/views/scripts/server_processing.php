<?php
// DB table to use
$table = 'books';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'title', 'dt' => 1 ),
    array( 'db' => 'codeNum', 'dt' => 2 ),
    array( 'db' => 'authorLastName', 'dt' => 3 ),
    array( 'db' => 'authorFirstName', 'dt' => 4 ),
    array( 'db' => 'illustratorLastName', 'dt' => 5 ),
    array( 'db' => 'illustratorFirstName', 'dt' => 6 ),
    array( 'db' => 'translatorLastName', 'dt' => 7 ),
    array( 'db' => 'translatorFirstName', 'dt' => 8 ),
    array( 'db' => 'publisher', 'dt' => 9 ),
    array( 'db' => 'copyright', 'dt' => 10 ),
    array( 'db' => 'isbn', 'dt' => 11)
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'batchat', // to be changed for every different instance of a local DB
    'db'   => 'bookcat',
    'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require('ssp.class.php');

echo json_encode(
    \SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
