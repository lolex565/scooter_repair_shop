<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main_style.css">
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "repair_shop";

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

    ?>
    <h1>Nowe Zgłoszenie</h1>
    <h2><a href='index.php'>Powrót</a></h2>
    <br>
    <form action="add_new_application.php" method="post">
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
                <td>Marka hulajnogi</td>
                <td><input required type="text" name="scooter_make"></td>
            </tr>
            <tr>
                <td>Model hulajnogi</td>
                <td><input required type="text" name="scooter_model"></td>
            </tr>
            <tr>
                <td>Numer ramy hulajnogi</td>
                <td><input required list="frame_numbers" name="scooter_frame_number">
                    <?php

                    ?>
                </td>
            </tr>
            <tr>
                <td>Opis usterki</td>
                <td><textarea required name="description"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"></td>
            </tr>
        </table>
        
    </form>
</body>
</html>