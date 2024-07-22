<?php

if (!isset($_POST['login']) || !isset($_POST['password'])) {
    header('Location: login_page.php');
    exit();
}

$login = $_POST['login'];

$login_password = $_POST['password'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "repair_shop";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $stmt = $conn->prepare("SELECT * FROM `user` WHERE `username` = ? AND `active` = 1;");

    $stmt->bind_param("s", $login);

    $stmt->execute();

    $result = $stmt->get_result();

    $user = $result->fetch_assoc();

    if ($user == null) {
        header('Location: login_page.php');
        exit();
    }


    if (password_verify($login_password, $user['hashed_password'])) {
        session_start([
            'cookie_lifetime' => 86400,
        ]);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: index.php');
        exit();
    } else {
        header('Location: login_page.php');
        exit();
    }
} catch (mysqli_sql_exception $e) {
    $error_message = urlencode($e->getMessage());
    header('Location: error.php?code=500&message=' . $error_message);
    exit();
}
