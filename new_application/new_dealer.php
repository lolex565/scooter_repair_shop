<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main_style.css">
    <title>Document</title>
</head>
<body>
    <?php

    if (!isset($_POST['dealer_name']) || !isset($_POST['dealer_phone'])) {
        header('Location: dealer_chooser.php');
        exit();
    }

    if (!isset($_POST['client_id'])) {
        header('Location: client_chooser.php');
        exit();
    }

    if (!isset($_POST['scooter_id'])) {
        header('Location: scooter_chooser.php');
        exit();
    }

    $client_id = $_POST['client_id'];

    $scooter_id = $_POST['scooter_id'];

    $dealer_name = $_POST['dealer_name'];
    $dealer_phone = $_POST['dealer_phone'];

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
            header('Location: ..//error.php?code=500&message='.$error_message);
            exit(); // Make sure to exit after the header redirection
        }

        $stmt = $conn->prepare("INSERT INTO `dealer` (`name`, `phone`) VALUES (?, ?)");

        $stmt->bind_param("ss", $dealer_name, $dealer_phone);

        $stmt->execute();

        $dealer_id = $stmt->insert_id;

        $stmt->close();

        $conn->close();

        echo "<h1>Pomyślnie dodano Dealera: ".$dealer_name." ".$dealer_phone."</h1>";
        echo "<form action='new_application.php' method='post'>";
        echo "<input type='hidden' name='client_id' value='".$client_id."'>";
        echo "<input type='hidden' name='scooter_id' value='".$scooter_id."'>";
        echo "<input type='hidden' name='dealer_id' value='".$dealer_id."'>";
        echo "<input type='submit' value='Dalej'>";
        echo "</form>";

        exit(); // Make sure to exit after the header redirection

    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());
        header('Location: ..//error.php?code=500&message='.$error_message);
        exit(); // Make sure to exit after the header redirection
    }

?>
</body>
</html>

