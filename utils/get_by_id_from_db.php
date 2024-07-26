<?php

function get_client_by_id($client_id)
{
    require('get_db_conf.php');

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `client`.`id`, `client`.`name`, `client`.`phone` FROM `client` WHERE `client`.`id` = ?;";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $client_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            throw new Exception("No client with id: ".$client_id." found", 1);
        }
    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());

        header('Location: /error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

function get_scooter_by_id($scooter_id)
{
    require('get_db_conf.php');

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `scooter`.`id`, `scooter`.`make` AS `make`, `scooter`.`model` AS `model`, `scooter`.`frame_number` AS `frame_number` FROM `scooter` WHERE `scooter`.`id` = ?;";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $scooter_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            throw new Exception("No scooter with id: ".$scooter_id." found", 1);
        }
    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());

        header('Location: /error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

function get_dealer_by_id($dealer_id)
{
    require('get_db_conf.php');

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `dealer`.`id` AS `id`, `dealer`.`name` AS `name`, `dealer`.`phone` AS `phone` FROM `dealer` WHERE `dealer`.`id` = ?;";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $dealer_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            throw new Exception("No dealer with id: ".$dealer_id." found", 1);
        }
    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());

        header('Location: /error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

function get_application_by_id($application_id)
{
    require('get_db_conf.php');

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `repair_application`.`id` AS `application_id`, `repair_application`.`status` AS `application_status`, `repair_application`.`date_created` AS `application_date_created`, `repair_application`.`date_changed` AS `application_date_changed`, `repair_application`.`description` AS `application_description`, `client`.`id` AS `client_id`, `client`.`name` AS `client_name`, `client`.`phone` AS `client_phone`, `scooter`.`id` AS `scooter_id`, `scooter`.`make` AS `scooter_make`, `scooter`.`model` AS `scooter_model`, `scooter`.`frame_number` AS `scooter_frame_number`, `dealer`.`id` AS `dealer_id`, `dealer`.`name` AS `dealer_name`, `dealer`.`phone` AS `dealer_phone` FROM `repair_application` LEFT JOIN `client` ON `repair_application`.`client_id` = `client`.`id` LEFT JOIN `scooter` ON `repair_application`.`scooter_id` = `scooter`.`id` LEFT JOIN `dealer` ON `repair_application`.`dealer_id` = `dealer`.`id` WHERE `repair_application`.`id` = ?;";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $application_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            throw new Exception("No application with id: ".$application_id." found", 1);
            
        }
    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());

        header('Location: //error.php?code=500&message=' . $error_message);
        exit(); // Make sure to exit after the header redirection
    }
}

?>