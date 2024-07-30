<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require('utils/is_logged_in.php');

include('../utils/get_db_conf.php');

// Enable exception mode for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // Check if POST variables are set
    if (isset($_POST['new_status']) && isset($_POST['id'])) {
        $new_status = $_POST['new_status'];
        $id = $_POST['id'];

        // Prepare and bind
        $stmt = $conn->prepare("UPDATE `repair_application` SET `status` = ? WHERE `id` = ?");
        $stmt->bind_param("si", $new_status, $id);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Record updated successfully";
            $stmt->close();
            $conn->close();
            header('Location: index.php?status='.$new_status);
            exit(); // Make sure to exit after the header redirection
        } else {
            $error_message = urlencode($stmt->error);
            $stmt->close();
            $conn->close();
            header('Location: /error.php?code=500&message='.$error_message);
            exit(); // Make sure to exit after the header redirection
        }
    } else {
        echo "Required parameters are missing.";
        $conn->close();
    }
} catch (mysqli_sql_exception $e) {
    $error_message = urlencode($e->getMessage());
    $conn->close();
    header('Location: /error.php?code=500&message='.$error_message);
    exit(); // Make sure to exit after the header redirection
}

?>
</body>
</html>
