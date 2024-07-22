<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main_style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    require('../utils/is_logged_in.php');
    if (!isset($_POST['client_name']) || !isset($_POST['client_phone'])) {
        header('Location: client_chooser.php');
        exit();
    }

    $client_name = $_POST['client_name'];
    $client_phone = $_POST['client_phone'];

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
            $error_message = urlencode($conn->connect_error);
            header('Location: ../error.php?code=500&message='.$error_message);
            exit(); // Make sure to exit after the header redirection
        }

        $stmt = $conn->prepare("INSERT INTO `client` (`name`, `phone`) VALUES (?, ?)");

        $stmt->bind_param("ss", $client_name, $client_phone);

        $stmt->execute();

        $client_id = $stmt->insert_id;

        $stmt->close();

        $conn->close();

        echo "<h1>Pomyślnie dodano klienta: ".$client_name." ".$client_phone."</h1>";
        echo "<form action='scooter_chooser.php' method='post'>";
        echo "<input type='hidden' name='client_id' value='".$client_id."'>";
        echo "<input type='submit' value='Dalej'>";

        exit(); // Make sure to exit after the header redirection

    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());
        header('Location: ../error.php?code=500&message='.$error_message);
        exit(); // Make sure to exit after the header redirection
    }

?>