<?php 
    $host = "localhost";
    $database="thirty_three";
    $user = "root";
    $password = "";
    

    $mysqli = new mysqli(
        $host,
        $user,
        $password,
        $database,
    );

    // ERROR
    if($mysqli->connect_error) {
        die("Connection Failed". connect_error);
    }

    return $mysqli
?>

