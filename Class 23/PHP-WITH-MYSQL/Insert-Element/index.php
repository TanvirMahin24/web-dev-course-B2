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
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    
    // Sql query for inserting data
    $sql = "INSERT INTO persons VALUES (4, 'John', 'Doe', 'Kajla', 'Rajshahi')";

    
    // Invoke query
    if (mysqli_query($conn, $sql)) {
        echo "New record created in persons table";
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

?>