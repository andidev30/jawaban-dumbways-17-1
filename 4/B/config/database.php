<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "jawaban_dumbways_17";

    $con = mysqli_connect($host, $user, $pass, $db);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }