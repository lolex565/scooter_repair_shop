<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../main_style.css">
</head>
<body>
    <h1>Edycja Zgłoszenia</h1>
    <h2><a href='/index.php'>Powrót</a></h2>
    <br>
    <form action="edit_application.php" method="post">
        <table>

        <?php
            require('../utils/is_logged_in.php');
            include('../utils/get_by_id_from_db.php');

            if (!isset($_POST['id']) && !isset($_GET['id'])) {
                header('Location: /index.php');
                exit();
            }


            try {
                $application_id = $_POST['id'];
                if ($application_id == "") {
                    $application_id = $_GET['id'];
                }

                $application = get_application_by_id($application_id);

                if ($application != NULL){
                    echo "<tr>";
                    echo "<td>Id:</td>";
                    echo "<td>".$application['application_id']."</td>";
                    echo "<input type='hidden' name='id' value='".$application['application_id']."'>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Klient:</td>";
                    echo "<td><input type='hidden' name='client_id' value='".$application['client_id']."' readonly>".$application['client_name']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Hulajnoga:</td>";
                    echo "<td><input type='hidden' name='scooter_id' value='".$application['scooter_id']."' readonly>".$application['scooter_make']." ".$application['scooter_model']." ".$application['scooter_frame_number']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Dealer:</td>";
                    echo "<td><input type='hidden' name='dealer_id' value='".$application['dealer_id']."' readonly>".$application['dealer_name']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Opis:</td>";
                    echo "<td><textarea name='description' rows=10 cols=50 >".$application['application_description']."</textarea></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Status:</td>";
                    echo "<td><select name='status'>";
                    echo "<option value='created' ".($application['application_status'] == 'created' ? 'selected' : '').">Utworzone</option>";
                    echo "<option value='received' ".($application['application_status'] == 'received' ? 'selected' : '').">Przyjęte</option>";
                    echo "<option value='service_wwa' ".($application['application_status'] == 'service_wwa' ? 'selected' : '').">Serwis WWA</option>";
                    echo "<option value='in_progress' ".($application['application_status'] == 'in_progress' ? 'selected' : '').">W trakcie</option>";
                    echo "<option value='finished' ".($application['application_status'] == 'finished' ? 'selected' : '').">Zakończone</option>";
                    echo "</select></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Data utworzenia:</td>";
                    $date_for_value = explode(" ", $application['application_date_created'])[0];
                    echo "<td><input type='date' name='date_created' value='".$date_for_value."'></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan=2>";
                    echo "<input type='submit' value='Zapisz zmiany'>";
                    echo "</td>";
                    echo "</tr>";
                }
                
            } catch (Exception $e) {
                $error_message = urlencode($e->getMessage());
                header('Location: /error.php?code=500&message='.$error_message);
                exit();
            }

        ?>
        </table>
    </form>
</body>
</html>