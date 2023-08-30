<?php
    define('DB_HOST', 'localhost');
    define('DB_USER','knutgultand');
    define('DB_PASS', '123KG321');
    define('DB_NAME', 'first_db');

    //skapa kontakt
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn->connect_error){
        die('Connection failed' . $conn->connect_error);

    }

    // echo 'Connected to database named feedback.';