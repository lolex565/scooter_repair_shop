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
    require('../utils/is_logged_in.php');

    if (!isset($_POST['scooter_make']) || !isset($_POST['scooter_model']) || !isset($_POST['frame_number'])) {
        header('Location: scooter_chooser.php');
        exit();
    }

    if (!isset($_POST['client_id'])) {
        header('Location: client_chooser.php');
        exit();
    }

    $client_id = $_POST['client_id'];

    $scooter_make = $_POST['scooter_make'];
    $scooter_model = $_POST['scooter_model'];
    $frame_number = $_POST['frame_number'];

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

        $stmt = $conn->prepare("INSERT INTO `scooter` (`make`, `model`, `frame_number`) VALUES (?, ?, ?)");

        $stmt->bind_param("sss", $scooter_make, $scooter_model, $frame_number);

        $stmt->execute();

        $scooter_id = $stmt->insert_id;

        $stmt->close();

        $conn->close();

        echo "<h1>Pomyślnie dodano hulajnogę: ".$scooter_make." ".$scooter_model." ".$frame_number."</h1>";
        echo "<form action='dealer_chooser.php' method='post'>";
        echo "<input type='hidden' name='client_id' value='".$client_id."'>";
        echo "<input type='hidden' name='scooter_id' value='".$scooter_id."'>";
        echo "<input type='submit' value='Dalej'>";
        echo "</form>";

        exit(); // Make sure to exit after the header redirection

    } catch (mysqli_sql_exception $e) {
        $error_message = urlencode($e->getMessage());
        header('Location: ../error.php?code=500&message='.$error_message);
        exit(); // Make sure to exit after the header redirection
    }

?>
</body>
</html>

