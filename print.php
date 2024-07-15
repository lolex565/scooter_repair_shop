<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
  margin-left: auto;
  margin-right: auto;
}
</style>

    


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
                echo "<table>";
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
                echo "<td>Status</td>";
                echo "<td>".$row["status"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Opis</td>";
                echo "<td>".$row["description"]."</td>";
                echo "</tr>";
                echo "</table>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();

    
    ?>
</body>
</html>