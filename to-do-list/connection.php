<?php

    $dsn  = 'mysql:host=localhost;dbname=to-do-list'; // data source name

    $user = 'root'; // the user to connect

    $pass = ''; // password of this user

    try {

        $conn = new PDO($dsn, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {

        echo "connection failed!".$e->getMessage();
    }




?>