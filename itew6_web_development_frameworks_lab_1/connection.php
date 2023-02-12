<?php 
    $serverName = 'localhost';
    $databaseUsername = 'root';
    $databasePassword = '';
    $databaseName = 'product';

    // Defining the connection 
    $connection = mysqli_connect($serverName, $databaseUsername, $databasePassword, $databaseName);
    
    // Checking the connection 
    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }
?>