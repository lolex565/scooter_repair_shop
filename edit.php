<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main_style.css">
</head>
<body>
    <h1>Edycja Zgłoszenia</h1>
    <h2><a href='index.php'>Powrót</a></h2>
    <br>
    <form action="edit_application.php" method="post">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "simple_repair_shop";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }    
    
            $sql = "SELECT `application`.* FROM `application` WHERE `id` = ".$_POST['id'].";";
    
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<table><tr><td>Imie klienta</td><td><input required type=\"text\" name=\"client_name\" value=\"".$row["client_name"]."\"></td></tr>";
                    echo "<tr><td>Nazwisko klienta</td><td><input required type=\"text\" name=\"client_surname\" value=\"".$row["client_surname"]."\"></td></tr>";
                    echo "<tr><td>Telefon klienta</td><td><input required type=\"text\" name=\"client_phone\" value=\"".$row["client_phone"]."\"></td></tr>";
                    echo "<tr><td>Marka hulajnogi</td><td><input required type=\"text\" name=\"scooter_make\" value=\"".$row["scooter_make"]."\"></td></tr>";
                    echo "<tr><td>Model hulajnogi</td><td><input required type=\"text\" name=\"scooter_model\" value=\"".$row["scooter_model"]."\"></td></tr>";
                    echo "<tr><td>Numer ramy hulajnogi</td><td><input required type=\"text\" name=\"scooter_frame_number\" value=\"".$row["scooter_frame_number"]."\"></td></tr>";
                    echo "<tr><td>Opis usterki</td><td><textarea required name=\"description\">".$row["description"]."</textarea></td></tr>";
                    echo "<tr><td colspan=\"2\"><input type=\"hidden\" name=\"id\" value=\"".$row["id"]."\"><input type=\"submit\" value=\"zapisz\"></td></tr></table>";
                }
            } else {
                header('Location: index.php');
            }
            $conn->close();
        ?>
    </form>
</body>
</html>