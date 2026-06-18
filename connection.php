<?php

    include "credentials.php";
    
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    // Database connection
    $connection = new mysqli('localhost', $user, $pw, $db);
    
    // Check connection
    if ($connection->connect_error) {
        die("<div class='alert alert-danger m-3'>Connection failed: " . $connection->connect_error . "</div>");
    }
    
    // Select all records from scp table
    $AllRecords = $connection->prepare("SELECT * FROM scp");
    $AllRecords->execute();
    $result = $AllRecords->get_result();

?>