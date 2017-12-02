<?php

/* 
 * Trying to make mysqli_connect
 * Nov 21st 2017 A.Marinov
 */

// Credentials to use sakila database

$dbhost = 'localhost';
$dbuser = 'marty';
$dbpass = 'McFly';
$dbname = 'sakila';

// 1. Creating a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
        or die("Connection failed") ;
echo 'Connection successful';

// 2. Perform database query

// 3. Use returned data

// 4. Release returned data

// 5. Close database connection

mysqli_close($connection);

?>