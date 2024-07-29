<?php

if (!isset($_POST['login']) || !isset($_POST['password'])) {
    header('Location: login_page.php');
    exit();
}

$login = $_POST['login'];

$login_password = $_POST['password'];



include('utils/get_db_conf.php');

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
        $msg = "zły login lub nieaktywne konto";
        $encoded_msg = urlencode($msg);
        header('Location: '.getenv('APP_HOST').'login_page.php?message='.$encoded_msg);
        exit();
    }


    if (password_verify($login_password, $user['hashed_password'])) {
        session_start([
            'cookie_lifetime' => 86400,
        ]);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = $user['is_admin'];
        header('Location: '.getenv('APP_HOST').'index.php');
        exit();
    } else {
        $msg = "złe hasło";
        $encoded_msg = urlencode($msg);
        header('Location: '.getenv('APP_HOST').'login_page.php?message='.$encoded_msg);
        exit();
    }
} catch (mysqli_sql_exception $e) {
    $error_message = urlencode($e->getMessage());
    header('Location: '.getenv('APP_HOST').'error.php?code=500&message=' . $error_message);
    exit();
}
