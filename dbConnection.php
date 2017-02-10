<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "amhewins";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "books";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>