<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main_style.css">
</head>
<body>


<?php
    require('utils/is_logged_in.php');
    include('utils/get_by_id_from_db.php');

    if (!isset($_POST['id'])) {
        header('Location: /error.php?code=400&message=Missing%20required%20parameter%20id');
    }
    $id = intval($_POST['id']);
    $application = get_application_by_id($id);

    if ($application == null) {
        header('Location: /error.php?code=404&message=Application%20not%20found');
    }

    echo "<table id=\"print_table\">";
                echo "<tr><td>Klient</td><td>".$application['client_name']."</td></tr>";
                echo "<tr><td>Telefon Klienta</td><td>".$application['client_phone']."</td></tr>";
                echo "<tr><td>Dealer</td><td>".$application['dealer_name']."</td></tr>";
                echo "<tr><td>Telefon Dealera</td><td>".$application['dealer_phone']."</td></tr>";
                echo "<tr><td>Marka</td><td>".$application['scooter_make']."</td></tr>";
                echo "<tr><td>Model</td><td>".$application['scooter_model']."</td></tr>";
                echo "<tr><td>Nr ramy</td><td>".$application['scooter_frame_number']."</td></tr>";
                echo "<tr><td>Data zgłoszenia</td><td>".$application['application_date_created']."</td></tr>";
                echo "<tr><td>Data edycji</td><td>".$application['application_date_changed']."</td></tr>";
                echo "<tr><td>Status</td><td>";
                switch ($application['application_status']) {
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
                        echo $application['application_status'];
                        break;
                }
                echo "</td></tr>";
                echo "<tr><td>Opis</td><td>".$application['application_description']."</td></tr>";
                echo "</table>";


?>
</body>
</html>
