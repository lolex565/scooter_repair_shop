<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "simple_repair_shop";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }    

    $client_name = $_POST['client_name'];
    $client_surname = $_POST['client_surname'];
    $client_phone = $_POST['client_phone'];
    $scooter_make = $_POST['scooter_make'];
    $scooter_model = $_POST['scooter_model'];
    $scooter_frame_number = $_POST['scooter_frame_number'];
    $description = $_POST['description'];
    
    $sql = "INSERT INTO `application` (`client_name`, `client_surname`, `client_phone`, `scooter_make`, `scooter_model`, `scooter_frame_number`, `description`) VALUES ('$client_name', '$client_surname', '$client_phone', '$scooter_make', '$scooter_model', '$scooter_frame_number', '$description');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>