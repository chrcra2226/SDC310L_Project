<?php
    // This file provides the information for accessing the database.and connecting to MySQL.
    // First, we define the constants:                                                     
    define ('DB_USER', 'chrcra2226'); 
    define ('DB_PASSWORD', 'Sol@5ice!'); 
    define ('DB_HOST', 'localhost');
    define ('DB_NAME', 'sdc310l_db');
    // Next we assign the database connection to a variable that we will call $dbcon:    
    $dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($dbcon->connect_error) {
        die("Connection failed: " . $dbcon->connect_error);
    }

    mysqli_set_charset($dbcon, 'utf8');
?>