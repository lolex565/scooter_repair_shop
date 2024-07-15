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

$sql = "UPDATE `application` SET `client_name` = '".$_POST["client_name"]."', `client_surname` = '".$_POST["client_surname"]."', `client_phone` = '".$_POST["client_phone"]."', `scooter_make` = '".$_POST["scooter_make"]."', `scooter_model` = '".$_POST["scooter_model"]."', `scooter_frame_number` = '".$_POST["scooter_frame_number"]."', `description` = '".$_POST["description"]."' WHERE `application`.`id` = ".$_POST["id"]." ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>