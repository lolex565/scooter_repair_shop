<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main_style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../utils/is_logged_in.php');
    include('../utils/get_by_id_from_db.php');
    if (!isset($_POST['id'])) {
        header('Location: /index.php');
        exit();
    }
    if (!$_SESSION['is_admin']) {
        $message = urlencode("Nie masz uprawnień do usunięcia zgłoszenia");
        $code = 401;
        header("Location: /error.php?message=$message&code=$code");
    }
    $application_id = $_POST['id'];
    $application = get_application_by_id($application_id);

    if ($application == null) {
        $message = urlencode("Nie ma zgłoszenia o podanym id");
        $code = 404;
        header("Location: /error.php?message=$message&code=$code");
    }

    echo "<h1>Usunięcie zgłoszenia</h1>";
    echo "<h2>Czy na pewno chcesz usunąć zgłoszenie o id: " . $application_id . "?</h2>";
    echo "<form method=\"post\" action=\"delete_application.php\">";
    echo "<input type=\"hidden\" name=\"application_id\" value=\"".$application_id."\">";
    echo "<table><tr><th colspan=2>Zgłoszenie do usunięcia</th></tr>";
    echo "<tr><td>Klient</td><td>" . $application['client_name'] . "</td></tr>";
    echo "<tr><td>Telefon Klienta</td><td>" . $application['client_phone'] . "</td></tr>";
    echo "<tr><td>Dealer</td><td>" . $application['dealer_name'] . "</td></tr>";
    echo "<tr><td>Telefon Dealera</td><td>" . $application['dealer_phone'] . "</td></tr>";
    echo "<tr><td>Marka</td><td>" . $application['scooter_make'] . "</td></tr>";
    echo "<tr><td>Model</td><td>" . $application['scooter_model'] . "</td></tr>";
    echo "<tr><td>Nr ramy</td><td>" . $application['scooter_frame_number'] . "</td></tr>";
    echo "<tr><td>Data zgłoszenia</td><td>" . $application['application_date_created'] . "</td></tr>";
    echo "<tr><td>Data edycji</td><td>" . $application['application_date_changed'] . "</td></tr>";
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
    echo "<tr><td>Opis</td><td>" . $application['application_description'] . "</td></tr>";
    echo "</table>";
    echo "<input type=\"submit\" value=\"usuń zgłoszenie\">";
    echo "</form>";
    echo ""

    ?>

</body>

<form action="/index.php">
    <input type="submit" value="Powrót do strony głównej">
</form>


</html>