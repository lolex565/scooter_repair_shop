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
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }    

        try {
            // Check if POST variables are set
            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                
                // Prepare and bind
                $id = intval($_POST['id']);
                $stmt = $conn->prepare("SELECT `repair_application`.`status` AS `status`, `client`.`name` AS `client_name`, `client`.`phone` AS `client_phone`, `dealer`.`name` AS `dealer_name`, `dealer`.`phone` AS `dealer_phone`, `scooter`.`make` AS `scooter_make`, `scooter`.`model` AS `scooter_model`, `scooter`.`frame_number` AS `frame_number`, `repair_application`.`description` AS `description`, `repair_application`.`id`, `repair_application`.`date_created` AS `date_created`, `repair_application`.`date_changed` AS `date_changed` FROM `repair_application` LEFT JOIN `client` ON `repair_application`.`client_id` = `client`.`id` LEFT JOIN `dealer` ON `repair_application`.`dealer_id` = `dealer`.`id` LEFT JOIN `scooter` ON `repair_application`.`scooter_id` = `scooter`.`id` WHERE `repair_application`.`id` = ?;");
                $stmt->bind_param("i", $id);
        
                // Execute the statement
                if ($stmt->execute()) {
                    $stmt->bind_result($application_status, $client_name, $client_phone, $dealer_name, $dealer_phone, $scooter_make, $scooter_model, $frame_number, $description, $application_id, $date_created, $date_changed);
                
                // check if no results
                    if ($stmt->fetch() != NULL) {
                        echo "<table id=\"print_table\">";
                        echo "<tr>";
                        echo "<td>Klient</td>";
                        echo "<td>".$client_name."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Telefon Klienta</td>";
                        echo "<td>".$client_phone."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Dealer</td>";
                        echo "<td>".$dealer_name."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Telefon Dealera</td>";
                        echo "<td>".$dealer_phone."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>marka</td>";
                        echo "<td>".$scooter_make."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>model</td>";
                        echo "<td>".$scooter_model."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Nr ramy</td>";
                        echo "<td>".$frame_number."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Data zgłoszenia</td>";
                        echo "<td>".$date_created."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Data edycji</td>";
                        echo "<td>".$date_changed."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Status</td>";
                        echo "<td>";
                        switch ($application_status) {
                            case "created":
                                echo "utworzono";
                                break;
                            case "received";
                                echo "odebrano";
                                break;
                            case "in_progress":
                                echo "w trakcie";
                                break;
                            case "finished":
                                echo "ukończono";
                                break;
                            default:
                                echo $application_status;
                                break;
                        }
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Opis</td>";
                        echo "<td>".$description."</td>";
                        echo "</tr>";
                        echo "</table>";
                    } else {
                        echo "<h2>Brak wyników</h2>";
                        $stmt->close();
                        $conn->close();
                        exit();
                    }


                    $stmt->close();
                    $conn->close();
                    exit();
                } else {
                    $error_message = urlencode($stmt->error);
                    $stmt->close();
                    $conn->close();
                    header('Location: error.php?code=500&message='.$error_message);
                    exit(); // Make sure to exit after the header redirection
                }
            } else {
                echo "Required parameters are missing.";
                $conn->close();
            }
        } catch (mysqli_sql_exception $e) {
            $error_message = urlencode($e->getMessage());
            $conn->close();
            header('Location: error.php?code=500&message='.$error_message);
            exit(); // Make sure to exit after the header redirection
        }

        // $result = $conn->query($sql);
        // if ($result->num_rows > 0) {
        //     while($row = $result->fetch_assoc()) {
        //         # output table with data
        //         echo "<table id=\"print_table\">";
        //         echo "<tr>";
        //         echo "<td>Imię</td>";
        //         echo "<td>".$row["client_name"]."</td>";
        //         echo "</tr>";
        //         echo "<tr>";
        //         echo "<td>Nazwisko</td>";
        //         echo "<td>".$row["client_surname"]."</td>";
        //         echo "</tr>";
        //         echo "<tr>";
        //         echo "<td>Numer Telefonu</td>";
        //         echo "<td>".$row["client_phone"]."</td>";
        //         echo "</tr>";
        //         echo "<tr>";
        //         echo "<td>Marka</td>";
        //         echo "<td>".$row["scooter_make"]."</td>";
        //         echo "</tr>";
        //         echo "<tr>";
        //         echo "<td>model</td>";
        //         echo "<td>".$row["scooter_model"]."</td>";
        //         echo "</tr>";
        //         echo "<tr>";
        //         echo "<td>Nr ramy</td>";
        //         echo "<td>".$row["scooter_frame_number"]."</td>";
        //         echo "</tr>";
        //         echo "<tr>";
        //         echo "<td>Data zgłoszenia</td>";
        //         echo "<td>".$row["date_created"]."</td>";
        //         echo "</tr>";
        //         echo "<tr>";
        //         echo "<td>Data edycji</td>";
        //         echo "<td>".$row["date_last_change"]."</td>";
        //         echo "</tr>";
        //         echo "<tr>";
        //         echo "<td>Status</td>";
        //         echo "<td>";
        //         switch ($row["status"]) {
        //             case "created":
        //                 echo "utworzono";
        //                 break;
        //             case "received";
        //                 echo "odebrano";
        //                 break;
        //             case "in_progress":
        //                 echo "w trakcie";
        //                 break;
        //             case "finished":
        //                 echo "ukończono";
        //                 break;
        //             default:
        //                 echo $row["status"];
        //                 break;
        //         }
        //         echo "</td>";
        //         echo "</tr>";
        //         echo "<tr>";
        //         echo "<td>Opis</td>";
        //         echo "<td>".$row["description"]."</td>";
        //         echo "</tr>";
        //         echo "</table>";
        //     }
        // } else {
        //     header('Location: index.php');
        // }
        // $conn->close();

    
    ?>
</body>
</html>