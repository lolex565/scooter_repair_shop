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

        header('Location: /error.php?code=500&message=' . $error_message);
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

        header('Location: /error.php?code=500&message=' . $error_message);
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

        header('Location: /error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

function get_full_applications(string $status = null,int $rows = 50,int $offset = 0){
    // $servername = getenv('DB_HOST');
    // $username = getenv('DB_USER');
    // $password = getenv('DB_PASSWORD');
    // $dbname = getenv('DB_NAME');

    require('get_db_conf.php');

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `repair_application`.`id` AS `application_id`, `repair_application`.`status` AS `application_status`, `repair_application`.`date_created` AS `application_date_created`, `repair_application`.`date_changed` AS `application_date_changed`, `repair_application`.`description` AS `application_description`, `client`.`id` AS `client_id`, `client`.`name` AS `client_name`, `client`.`phone` AS `client_phone`, `scooter`.`id` AS `scooter_id`, `scooter`.`make` AS `scooter_make`, `scooter`.`model` AS `scooter_model`, `scooter`.`frame_number` AS `scooter_frame_number`, `dealer`.`id` AS `dealer_id`, `dealer`.`name` AS `dealer_name`, `dealer`.`phone` AS `dealer_phone` FROM `repair_application` LEFT JOIN `client` ON `repair_application`.`client_id` = `client`.`id` LEFT JOIN `scooter` ON `repair_application`.`scooter_id` = `scooter`.`id` LEFT JOIN `dealer` ON `repair_application`.`dealer_id` = `dealer`.`id`"; 
        if($status != "" || $status != null){
            $sql .= " WHERE `repair_application`.`status` = ? ORDER BY `repair_application`.`id` LIMIT ? OFFSET ?;";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sii", $status, $rows, $offset);
        } else {
            $sql .= " ORDER BY `repair_application`.`id` LIMIT ? OFFSET ?;";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $rows, $offset);
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

        header('Location: /error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

?>