<?php
    
    $host = "127.0.0.1";
    $user = "amhewins";
    $pass = "";
    $db = "books";
    $port = 3306;
    
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>