<?php
    define("DB_HOST","localhost");
    define("DB_USER","JaparmySholly");
    define("DB_PASS","NOTagain01!");
    define("DB_NAME","php_dev");

    // Create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); 

    // check connection
    if ($conn->connect_error) {
        die ('Connection Failed ' . $conn->connect_error);  
    }
