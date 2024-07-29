<?php

include('../utils/is_logged_in.php');
include('../utils/get_db_conf.php');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

    if (!isset($_POST['client_id'])) {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    $client_id = $_POST['client_id'];

    if ($client_id == "") {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    if (!isset($_POST['scooter_id'])) {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    $scooter_id = $_POST['scooter_id'];

    if ($scooter_id == "") {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    if (!isset($_POST['dealer_id'])) {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    $dealer_id = $_POST['dealer_id'];

    if ($dealer_id == "") {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    if (!isset($_POST['description'])) {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    $description = $_POST['description'];

    if ($description == "") {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    if (!isset($_POST['date_created'])) {
        $date_created = "";
    } else {
        $date_created = $_POST['date_created'];
    }

    if (!isset($_POST['status'])) {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    $status = $_POST['status'];

    if ($status == "") {
        header("Location: edit.php?id=".$_POST['id']);
        exit();
    }

    $id = $_POST['id'];

    $sql = "UPDATE repair_application SET client_id = ?, scooter_id = ?, dealer_id = ?, description = ?, date_created = ?, status = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("iiisssi", $client_id, $scooter_id, $dealer_id, $description, $date_created,$status, $id);

    $stmt->execute();

    header("Location: /index.php");
    exit();

} catch (mysqli_sql_exception $e) {
    $error_message = urlencode($e->getMessage());

    header('Location: /error.php?code=500&message=' . $error_message);
    exit(); // Make sure to exit after the header redirection
}

?>