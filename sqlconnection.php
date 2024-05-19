<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "portfolio_db";

    // create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    // to check connection
    if($conn->connect_error){
        die("connection failed:" .$conn->connect_error);
    } else {
        //echo "Connection successful";
    }

?>