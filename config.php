<?php
    $host = "mysql";
    $user = "root";
    $pass = "root";
    $db = "ticketdb";
    $port = 3306;

    $con = mysqli_connect($host, $user, $pass, $db, $port);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }