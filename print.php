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



try {
    // Check if POST variable 'id' is set
    if (isset($_POST['id'])) {
        $id = intval($_POST['id']);

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Prepare and bind
        $stmt = $conn->prepare("SELECT `repair_application`.`status` AS `status`, `client`.`name` AS `client_name`, `client`.`phone` AS `client_phone`, `dealer`.`name` AS `dealer_name`, `dealer`.`phone` AS `dealer_phone`, `scooter`.`make` AS `scooter_make`, `scooter`.`model` AS `scooter_model`, `scooter`.`frame_number` AS `frame_number`, `repair_application`.`description` AS `description`, `repair_application`.`id`, `repair_application`.`date_created` AS `date_created`, `repair_application`.`date_changed` AS `date_changed` FROM `repair_application` LEFT JOIN `client` ON `repair_application`.`client_id` = `client`.`id` LEFT JOIN `dealer` ON `repair_application`.`dealer_id` = `dealer`.`id` LEFT JOIN `scooter` ON `repair_application`.`scooter_id` = `scooter`.`id` WHERE `repair_application`.`id` = ? LIMIT 1;");
        $stmt->bind_param("i", $id);
        
        // Execute the statement
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            // Check if any rows were returned
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                
                echo "<table id=\"print_table\">";
                echo "<tr><td>Klient</td><td>".$row['client_name']."</td></tr>";
                echo "<tr><td>Telefon Klienta</td><td>".$row['client_phone']."</td></tr>";
                echo "<tr><td>Dealer</td><td>".$row['dealer_name']."</td></tr>";
                echo "<tr><td>Telefon Dealera</td><td>".$row['dealer_phone']."</td></tr>";
                echo "<tr><td>Marka</td><td>".$row['scooter_make']."</td></tr>";
                echo "<tr><td>Model</td><td>".$row['scooter_model']."</td></tr>";
                echo "<tr><td>Nr ramy</td><td>".$row['frame_number']."</td></tr>";
                echo "<tr><td>Data zgłoszenia</td><td>".$row['date_created']."</td></tr>";
                echo "<tr><td>Data edycji</td><td>".$row['date_changed']."</td></tr>";
                echo "<tr><td>Status</td><td>";
                switch ($row['status']) {
                    case "created":
                        echo "utworzono";
                        break;
                    case "received":
                        echo "odebrano";
                        break;
                    case "in_progress":
                        echo "w trakcie";
                        break;
                    case "finished":
                        echo "ukończono";
                        break;
                    default:
                        echo $row['status'];
                        break;
                }
                echo "</td></tr>";
                echo "<tr><td>Opis</td><td>".$row['description']."</td></tr>";
                echo "</table>";
            } else {
                echo "<h2>Brak wyników</h2>";
            }

            $stmt->close();
            $conn->close();
            exit(); // Exit after displaying the result
        } else {
            $error_message = urlencode($stmt->error);
            $stmt->close();
            $conn->close();
            header('Location: error.php?code=500&message='.$error_message);
            exit(); // Exit after the header redirection
        }
    } else {
        echo "Required parameter 'id' is missing.";
        $conn->close();
    }
} catch (mysqli_sql_exception $e) {
    $error_message = urlencode($e->getMessage());
    $conn->close();
    header('Location: error.php?code=500&message='.$error_message);
    exit(); // Exit after the header redirection
}
?>
</body>
</html>
