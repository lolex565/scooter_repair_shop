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
                # output table with data
                echo "<table id=\"print_table\">";
                echo "<tr>";
                echo "<td>Imię</td>";
                echo "<td>".$row["client_name"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Nazwisko</td>";
                echo "<td>".$row["client_surname"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Numer Telefonu</td>";
                echo "<td>".$row["client_phone"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Marka</td>";
                echo "<td>".$row["scooter_make"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>model</td>";
                echo "<td>".$row["scooter_model"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Nr ramy</td>";
                echo "<td>".$row["scooter_frame_number"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Data zgłoszenia</td>";
                echo "<td>".$row["date_created"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Data edycji</td>";
                echo "<td>".$row["date_last_change"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Status</td>";
                echo "<td>";
                switch ($row["status"]) {
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
                        echo $row["status"];
                        break;
                }
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Opis</td>";
                echo "<td>".$row["description"]."</td>";
                echo "</tr>";
                echo "</table>";
            }
        } else {
            header('Location: index.php');
        }
        $conn->close();

    
    ?>
</body>
</html>