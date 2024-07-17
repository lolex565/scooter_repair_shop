<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main_style.css">
    <title>Document</title>
</head>
<body>

<h1>Zgłoszenia</h1>
<h2><a href="index.php">wszystkie </a><a href="index.php?status=created">utworzone </a><a href="index.php?status=received">odebrane </a><a href="index.php?status=in_progress">w trakcie </a><a href="index.php?status=finished">ukończone</a></h2>
<h2></h2>
<a href='new_application.php'>Dodaj nowe zgłoszenie</a>
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

        try {
            $sql = "SELECT `repair_application`.`status`, `client`.`first_name` AS `client_first_name`, `client`.`last_name` AS `client_last_name`, `dealer`.`name` AS `dealer_name`, `scooter`.`make` AS `scooter_make`, `scooter`.`model` AS `scooter_model`, `repair_application`.`date_created`, `repair_application`.`date_changed`, `repair_application`.`description`, `scooter`.`frame_number` AS `scooter_frame_number`, `repair_application`.`id` FROM `repair_application` LEFT JOIN `client` ON `repair_application`.`client_id` = `client`.`id` LEFT JOIN `dealer` ON `repair_application`.`dealer_id` = `dealer`.`id` LEFT JOIN `scooter` ON `repair_application`.`scooter_id` = `scooter`.`id` ";
            if (isset($_GET['status'])) {
                $sql .= "WHERE `repair_application`.`status` LIKE ?; ";
            } else {
                $sql .= ";";
            }

            $stmt = $conn->prepare($sql);
            if (isset($_GET['status'])) {
                $status = $_GET['status'];
                $stmt->bind_param("s", $status);
            }

            if ($stmt->execute()) {
                $stmt->bind_result($application_status, $client_first_name, $client_last_name, $dealer_name, $scooter_make, $scooter_model, $date_created, $date_changed, $description, $frame_number, $application_id);


                echo "<table border='1'>"."<tr><th>Status</th><th>Klient</th><th>Diler</th><th>Hulajnoga</th><th>Numer ramy</th><th>Data zgłoszenia</th><th>Data edycji</th><th>Opis</th><th>zmień status na utworzone</th><th>zmień status na odebrane</th><th> zmień status na w trakcie</th><th>zmień status na zakończone</th><th>pokaż do druku</th><th>Edytuj</th></tr>";
                while ($stmt->fetch()) {
                    echo "<tr>";
                echo "<td";
                switch ($application_status) {
                    case "created":
                        echo " class=\"created\">utworzono";
                        break;
                    case "received";
                        echo " class=\"received\">odebrano";
                        break;
                    case "in_progress":
                        echo " class=\"in_progress\">w trakcie";
                        break;
                    case "finished":
                        echo " class=\"finished\">ukończono";
                        break;
                    default:
                        echo " class=\"unknown\">".$application_status;
                        break;
                }
                echo "</td>";
                echo "<td>".$client_first_name." ".$client_last_name."</td>";
                echo "<td>".$dealer_name."</td>";
                echo "<td>".$scooter_make." ".$scooter_model."</td>";
                echo "<td>".$frame_number."</td>";
                echo "<td>".$date_created."</td>";
                echo "<td>".$date_changed."</td>";
                echo "<td><div class=\"desc\">".$description."</div></td>";
                echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$application_id."><input type=\"hidden\" name=\"new_status\" value=\"created\"><input type=\"submit\" value=\"zmień\"></form></td>";
                echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$application_id."><input type=\"hidden\" name=\"new_status\" value=\"received\"><input type=\"submit\" value=\"zmień\"></form></td>";
                echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$application_id."><input type=\"hidden\" name=\"new_status\" value=\"in_progress\"><input type=\"submit\" value=\"zmień\"></form></td>";
                echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$application_id."><input type=\"hidden\" name=\"new_status\" value=\"finished\"><input type=\"submit\" value=\"zmień\"></form></td>";
                echo "<td><form action=\"print.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$application_id."><input type=\"submit\" value=\"pokaż\"></form></td>";
                echo "<td><form action=\"edit.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$application_id."><input type=\"submit\" value=\"edytuj\"></form></td>";
                echo "</tr>";
                }
                echo "</table>";

                $stmt->close();
                $conn->close();
                
                exit(); // Make sure to exit after the header redirection
            } else {
                $error_message = urlencode($stmt->error);
                $stmt->close();
                $conn->close();
                header('Location: error.php?code=500&message='.$error_message);
                exit(); // Make sure to exit after the header redirection
            }

        } catch (mysqli_sql_exception $e) {
            $error_message = urlencode($e->getMessage());
            $conn->close();
            header('Location: error.php?code=500&message='.$error_message);
            exit(); // Make sure to exit after the header redirection
        }

        
        $conn->close();
    ?>
</body>
</html>