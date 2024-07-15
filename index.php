<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        $dbname = "simple_repair_shop";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT `application`.* FROM `application`; ";
        if ($_GET['status'] != "") {
            $sql = "SELECT `application`.* FROM `application` WHERE `application`.status LIKE \"". $_GET['status']."\"; ";
        }
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table border='1'>"."<tr><th>Imię</th><th>Nazwisko</th><th>Numer Telefonu</th><th>Marka</th><th>model</th><th>Nr ramy</th><th>Data zgłoszenia</th><th>Data edycji</th><th>Status</th><th>Opis</th><th>zmień status na utworzone</th><th>zmień status na odebrane</th><th> zmień status na w trakcie</th><th>zmień status na zakończone</th><th>pokaż do druku</th><th>Edytuj</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["client_name"]."</td>";
                echo "<td>".$row["client_surname"]."</td>";
                echo "<td>".$row["client_phone"]."</td>";
                echo "<td>".$row["scooter_make"]."</td>";
                echo "<td>".$row["scooter_model"]."</td>";
                echo "<td>".$row["scooter_frame_number"]."</td>";
                echo "<td>".$row["date_created"]."</td>";
                echo "<td>".$row["date_last_change"]."</td>";
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
                // echo "<td>".$row["status"]."</td>";
                echo "<td>".$row["description"]."</td>";
                echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$row["id"]."><input type=\"hidden\" name=\"new_status\" value=\"created\"><input type=\"submit\" value=\"zmień\"></form></td>";
                echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$row["id"]."><input type=\"hidden\" name=\"new_status\" value=\"received\"><input type=\"submit\" value=\"zmień\"></form></td>";
                echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$row["id"]."><input type=\"hidden\" name=\"new_status\" value=\"in_progress\"><input type=\"submit\" value=\"zmień\"></form></td>";
                echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$row["id"]."><input type=\"hidden\" name=\"new_status\" value=\"finished\"><input type=\"submit\" value=\"zmień\"></form></td>";
                echo "<td><form action=\"print.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$row["id"]."><input type=\"submit\" value=\"pokaż do druku\"></form></td>";
                echo "<td><form action=\"edit.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=".$row["id"]."><input type=\"submit\" value=\"edytuj\"></form></td>";
                echo "</tr>";
            }
        } else {
            echo "<h1>0 results</h1>";
        }
        $conn->close();
    ?>
</body>
</html>