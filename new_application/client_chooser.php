<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main_style.css">
    <title>Document</title>
</head>
<body>
    <h1>Wybierz klienta lub dodaj nowego</h1>
    <h2>Wybierz klienta</h2>
    <form action="scooter_chooser.php" method="post">
        
            <?php
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
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT `client`.* FROM `client`;";

                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    echo "<select id='clients' name='client_id'>";
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='".$row["id"]."'>".$row['name']." ".$row['phone']."</option>";
                        }
                    }
                    echo "</select>";
                } catch (mysqli_sql_exception $e) {
                    $error_message = urlencode($e->getMessage());
                    $conn->close();
                    header('Location: error.php?code=500&message='.$error_message);
                    exit(); // Make sure to exit after the header redirection
                }
            ?>
            
            <input type="submit" value="Wybierz">
    </form>
    <h2>Nowy klient</h2>
    <form action="new_client.php" method="post">
        <table>
            <tr>
                <td>Imie i nazwisko klienta</td>
                <td><input required type="text" name="client_name"></td>
            </tr>
            <tr>
                <td>Telefon klienta</td>
                <td><input required type="text" name="client_phone"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Dodaj"></td>
            </tr>
        </table>
    </form>
</body>
</html>