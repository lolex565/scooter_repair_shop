<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main_style.css">
    <title>Document</title>
</head>

<body>
    <h1>Wybierz lub utwórz Dealera</h1>
    <h2>Wybierz Dealera</h2>
    <form action="new_application.php" method="post">
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

        if (!isset($_POST['scooter_id']) && !isset($_GET['scooter_id'])) {
            header('Location: client_chooser.php');
            exit();
        }

        if (isset($_POST['scooter_id'])) {
            $scooter_id = $_POST['scooter_id'];
        } else {
            $scooter_id = $_GET['scooter_id'];
        }

        if ($scooter_id == "") {
            header('Location: scooter_chooser.php?client_id=' . $client_id);
            exit();
        }

        echo "<input type='hidden' name='client_id' value='" . $client_id . "'>";
        echo "<input type='hidden' name='scooter_id' value='" . $scooter_id . "'>";


        try {

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT `dealer`.* FROM `dealer`;";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            echo "<input list='dealers' name='dealer_id'>";
            echo "<datalist id='dealers'>";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "' label='" . $row['name'] . " " . $row['phone'] . "'>";
                }
            }
            echo "</datalist>";
            echo "</input>";
        } catch (mysqli_sql_exception $e) {
            $error_message = urlencode($e->getMessage());
            header('Location: error.php?code=500&message=' . $error_message);
            exit(); // Make sure to exit after the header redirection
        }
        ?>
        <input type="submit" value="Wybierz">
    </form>
    <h2>Nowy Dealer</h2>
    <form action="new_dealer.php" method="post">
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

        if (!isset($_POST['scooter_id']) && !isset($_GET['scooter_id'])) {
            header('Location: scooter_chooser.php?client_id=' . $client_id);
            exit();
        }

        if (isset($_POST['scooter_id'])) {
            $scooter_id = $_POST['scooter_id'];
        } else {
            $scooter_id = $_GET['scooter_id'];
        }

        if ($scooter_id == "") {
            header('Location: scooter_chooser.php?client_id=' . $client_id);
            exit();
        }

        echo "<input type='hidden' name='client_id' value='" . $client_id . "'>";
        echo "<input type='hidden' name='scooter_id' value='" . $scooter_id . "'>";

        ?>
        <table>
            <tr>
                <td>Nazwa Dealera</td>
                <td><input required type="text" name="dealer_name"></td>
            </tr>
            <tr>
                <td>Telefon Dealera</td>
                <td><input required type="text" name="dealer_phone"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Dodaj"></td>
            </tr>
        </table>
    </form>

</body>

</html>