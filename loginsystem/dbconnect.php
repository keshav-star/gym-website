<?php
// ini_set('display_errors', '0');

    $servername = "localhost";
    $username = "root";
    $password = "";

    $database = "GymWebsite";

    $con = mysqli_connect($servername,$username, $password,$database);

    if(!$con){
        die("Connection failed" . mysqli_connect_error());
    }
?>