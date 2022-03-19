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
    echo "Connected successfully <br> <br>";

    
    // Sql query for inserting data
    $sql = "SELECT * FROM persons";

    
    // Invoke query
    $result = mysqli_query($conn, $sql);


    // Show the result
    if (mysqli_query($conn, $sql)) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " => " . $row["firstName"]. " " . $row["lastName"]. "<br>";
        }
    }
    else {
        echo "0 results";
    }

    // Close connection
    mysqli_close($conn);

?>