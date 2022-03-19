<?php

    include 'config.php';

    // Create connection
    $conn = mysqli_connect(
        $config['DB_HOST'],
        $config['DB_USERNAME'],
        $config['DB_PASSWORD'],
        $config['DB_DATABASE']
    );

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

?>