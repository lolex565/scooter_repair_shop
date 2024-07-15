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

    $sql = "UPDATE `application` SET `status` = '".$_POST['new_status']."' WHERE `id` = ".$_POST['id'].";";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header('Location: index.php?status='.$_POST['new_status']);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



?>