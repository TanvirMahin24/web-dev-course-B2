<?php

    $server = 'localhost';
    $user = "root";
    $password = "";
    $db = "blog";
  
    // Connection
    $conn = mysqli_connect($server, $user, $password, $db);
  
    // Check connection
    if(!$conn){
      die("DB connection failed" . mysqli_connect_error());
    }

?>