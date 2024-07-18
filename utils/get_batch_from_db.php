<?php

function get_clients(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "repair_shop";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `client`.* FROM `client`;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $clients = [];
        while ($row = $result->fetch_assoc()) {
            $clients[] = $row;
        }
        return $clients;
    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());

        header('Location: error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

function get_scooters(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "repair_shop";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `scooter`.* FROM `scooter`;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $scooters = [];
        while ($row = $result->fetch_assoc()) {
            $scooters[] = $row;
        }
        return $scooters;
    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());

        header('Location: error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

function get_dealers(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "repair_shop";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `dealer`.* FROM `dealer`;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $dealers = [];
        while ($row = $result->fetch_assoc()) {
            $dealers[] = $row;
        }
        return $dealers;
    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());

        header('Location: error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

function get_applications($status = null){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "repair_shop";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `application`.* FROM `application`"; 
        if($status != "" || $status != null){
            $sql .= " WHERE `application`.`status` = ?;";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $status);
        } else {
            $sql .= ";";
            $stmt = $conn->prepare($sql);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        $applications = [];
        while ($row = $result->fetch_assoc()) {
            $applications[] = $row;
        }
        return $applications;
    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());

        header('Location: error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

?>