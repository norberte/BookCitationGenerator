<?php
// DB table to use
$table = 'book';

// Table's primary key
$primaryKey = 'bid';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$columns = array(
    array( 'db' => 'title', 'dt' => 0 ),
    array( 'db' => 'codeNum', 'dt' => 1 ),
    array( 'db' => 'authorLastName', 'dt' => 2 ),
    array( 'db' => 'authorFirstName', 'dt' => 3 ),
    array( 'db' => 'illustratorLastName', 'dt' => 4 ),
    array( 'db' => 'illustratorFirstName', 'dt' => 5 ),
    array( 'db' => 'translatorLastName', 'dt' => 6 ),
    array( 'db' => 'translatorFirstName', 'dt' => 7 ),
    array( 'db' => 'publisher', 'dt' => 8 ),
    array( 'db' => 'copyright', 'dt' => 9 ),
    array( 'db' => 'isbn', 'dt' => 10)
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'YourOwnLocalDBPassword', // do be changed for every different instance of a local DB
    'db'   => 'bookCat',
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
