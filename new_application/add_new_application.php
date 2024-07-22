<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require('../utils/is_logged_in.php');

        if (!isset($_POST['client_id'])) {
            header("Location :client_chooser.php");
        }

        $client_id = $_POST['client_id'];

        if ($client_id == "") {
            header("Location: client_chooser.php");
        }

        if (!isset($_POST['scooter_id'])) {
            header("Location: scooter_chooser.php?client_id=" . $client_id);
        }

        $scooter_id = $_POST['scooter_id'];

        if ($scooter_id == "") {
            header("Location: scooter_chooser.php?client_id=" . $client_id);
        }

        if (!isset($_POST['dealer_id'])) {
            header("Location: dealer_chooser.php?client_id=" . $client_id . "&scooter_id=" . $scooter_id);
        }

        $dealer_id = $_POST['dealer_id'];

        if ($dealer_id == "") {
            header("Location: dealer_chooser.php?client_id=" . $client_id . "&scooter_id=" . $scooter_id);
        }

        if (!isset($_POST['description'])) {
            header("Location: new_application.php?client_id=" . $client_id . "&scooter_id=" . $scooter_id . "&dealer_id=" . $dealer_id);
        }

        $description = $_POST['description'];

        if ($description == "") {
            header("Location: new_application.php?client_id=" . $client_id . "&scooter_id=" . $scooter_id . "&dealer_id=" . $dealer_id);
        }

        if (!isset($_POST['date_created'])) {
            $date_created = "";
        } else {
            $date_created = $_POST['date_created'];
        }


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "repair_shop";

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
            $conn = new mysqli($servername, $username, $password, $dbname);
            $conn->set_charset("utf8");
            
            if ($date_created == "") {
                $stmt = $conn->prepare("INSERT INTO repair_application (`client_id`, `scooter_id`, `dealer_id`, `description`) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("iiis", $client_id, $scooter_id, $dealer_id, $description);
            } else {
                $stmt = $conn->prepare("INSERT INTO repair_application (`client_id`, `scooter_id`, `dealer_id`, `description`, `date_created`) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("iiiss", $client_id, $scooter_id, $dealer_id, $description, $date_created);
            }
            $stmt->execute();
            echo "<h1>Pomyślnie dodano zgłoszenie</h1>";
            echo "<a href='/index.php'>Powrót do strony głównej</a>";
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Błąd: " . $e->getMessage();
        }
    ?>
</body>
</html>