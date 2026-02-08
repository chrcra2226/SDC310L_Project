<?php
    // This file provides the information for accessing the database.and connecting to MySQL.
    // First, we define the constants:                                                     #1
    Define ('DB_USER', 'chrcra2226'); // or whatever userid you created
    Define ('DB_PASSWORD', 'Sol@5ice!'); // or whatever password you created
    Define ('DB_HOST', 'localhost');
    Define ('DB_NAME', 'sdc310l_db');
    // Next we assign the database connection to a variable that we will call $dbcon:      #2
    try {
        $dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($dbcon, 'utf8'); 
    } catch(Exception $e)
    {
        print "The system is busy please try later";
    }
    catch(Error $e)
    {
        print "The system is busy please try again later.";
    }
?>