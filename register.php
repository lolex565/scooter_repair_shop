<?php

if (!isset($_POST['login']) || !isset($_POST['password'])) {
    header('Location: register_page.php');
    exit();
}

$login = $_POST['login'];
$register_password = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "repair_shop";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $stmt = $conn->prepare("INSERT INTO `user` (`username`, `hashed_password`) VALUES (?, ?)");

    $hashed_password = password_hash($register_password, PASSWORD_DEFAULT);

    $stmt->bind_param("ss", $login, $hashed_password);

    $stmt->execute();

    $stmt->close();

    $conn->close();

    echo "<h1>Pomyślnie zarejestrowano użytkownika: ".$login."</h1>";
    echo "<form action='login_page.php' method='post'>";
    echo "<input type='submit' value='Zaloguj'>";

    exit(); // Make sure to exit after the header redirection

} catch (mysqli_sql_exception $e) {
    $error_message = urlencode($e->getMessage());
    header('Location: error.php?code=500&message='.$error_message);
    exit(); // Make sure to exit after the header redirection
}

?>