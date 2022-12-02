<?php

/**
 * Configuration file for database connection
 */

 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "movies";
 $dsn = "mysql:host=$host;dbname=$dbname";
 $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

?>