<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main_style.css">
    <title>Document</title>
</head>

<body>
    <h1>Wybierz lub dodaj hulajnogę</h1>
    <h2>Wybierz hulajnogę</h2>
    <form action="dealer_chooser.php" method="post">
        <?php
        require('../utils/is_logged_in.php');

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "repair_shop";

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        if (!isset($_POST['client_id']) && !isset($_GET['client_id'])) {
            header('Location: client_chooser.php');
            exit();
        }

        if (isset($_POST['client_id'])) {
            $client_id = $_POST['client_id'];
        } else {
            $client_id = $_GET['client_id'];
        }

        if ($client_id == "") {
            header('Location: client_chooser.php');
            exit();
        }

        echo "<input type='hidden' name='client_id' value='" . $client_id . "'>";


        try {

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT `scooter`.* FROM `scooter`;";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            echo "<input list='scooters' name='scooter_id'>";
            echo "<datalist id='scooters'>";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "' label='" . $row['frame_number'] . " | " . $row['make'] . " " . $row['model'] . "'>";
                }
            }
            echo "</datalist>";
            echo "</input>";
        } catch (mysqli_sql_exception $e) {
            $error_message = urlencode($e->getMessage());
            header('Location: /error.php?code=500&message=' . $error_message);
            exit(); // Make sure to exit after the header redirection
        }

        ?>
        <input type="submit" value="Wybierz">
    </form>
    <h2>Nowa hulajnoga</h2>
    <form action="new_scooter.php" method="post">
        <?php
        if (!isset($_POST['client_id']) && !isset($_GET['client_id'])) {
            header('Location: client_chooser.php');
            exit();
        }

        if (isset($_POST['client_id'])) {
            $client_id = $_POST['client_id'];
        } else {
            $client_id = $_GET['client_id'];
        }

        if ($client_id == "") {
            header('Location: client_chooser.php');
            exit();
        }

        echo "<input type='hidden' name='client_id' value='" . $client_id . "'>";
        ?>
        <table>
            <tr>
                <td>Marka hulajnogi</td>
                <td><input required type="text" name="scooter_make"></td>
            </tr>
            <tr>
                <td>Model hulajnogi</td>
                <td><input required type="text" name="scooter_model"></td>
            </tr>
            <tr>
                <td>Numer ramy hulajnogi</td>
                <td><input required type="text" name="frame_number"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Dodaj"></td>
            </tr>
        </table>
    </form>
</body>

</html>