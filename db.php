<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db = "testdb";
    
    $conn = new mysqli($server_name, $username, $password, $db);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name="Favour";
    $email = "favour@email.com";

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>