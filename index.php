<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main_style.css">
    <title>Document</title>
</head>

<body>
    <?php
        $env = file_get_contents(".env");
        $lines = explode("\n",$env);
        
        foreach($lines as $line){
          preg_match("/([^#]+)\=(.*)/",$line,$matches);
          if(isset($matches[2])){
            putenv(trim($line));
          }
        } 
        require('utils/is_logged_in.php');
        echo "<h1>Witaj ".htmlspecialchars($_SESSION['username'])."</h1>";
        if (getenv('APP_ENV') && $_SESSION['is_admin']) {
            echo "<h1>Aktywny tryb środowiska aplikacji: ".getenv('APP_ENV')."</h1>";
        }
        if ($_SESSION['is_admin']) {
            echo "<h1>Masz uprawnienia admina</h1>";
            echo "<h2><a href='app_settings_view.php'> pokaż ustawienia aplikacji</a></h2>";
        }
    ?>
    
    <a href="logout.php">Wyloguj</a>

    <h1>Zgłoszenia</h1>

    <table>
        <tr>
            <?php
            if (!isset($_GET['offset'])) {
                $page_buttons = "<td colspan=5><a href=\"index.php?offset=50";
                if (isset($_GET['status'])) {
                    $status = $_GET['status'];
                    $page_buttons .= "&status=" . $status;
                }
                $page_buttons .= "\">następne 50 zgłoszeń</a></td>";
                echo $page_buttons;
            } else {
                $offset = intval($_GET['offset']);
                $back = max(0, ($offset - 50));
                $forward = $offset + 50;
                $back_button = "<td colspan=2><a href=\"index.php";
                if ($back > 0 && (isset($_GET['status']))) {
                    $status = $_GET['status'];
                    $back_button .= "?offset=" . strval($back) . "&status=" . $status;
                } elseif (isset($_GET['status'])) {
                    $status = $_GET['status'];
                    $back_button .= "?status=" . $status;
                }
                $back_button .= "\">poprzednie 50 zgłoszeń</a></td>";
                $middle_button = "<td><a href=\"index.php";
                if (isset($_GET['status'])) {
                    $status = $_GET['status'];
                    $middle_button .= "?status=" . $status;
                }
                $middle_button .= "\">powrót do początku kategorii</a></td>";
                $forward_button = "<td colspan=2><a href=\"index.php?offset=" . strval($forward);
                if (isset($_GET['status'])) {
                    $status = $_GET['status'];
                    $forward_button .= "&status=" . $status;
                }
                $forward_button .= "\">następne 50 zgłoszeń</a></td>";
                $page_buttons = $back_button . $middle_button . $forward_button;
                echo $page_buttons;
            }
            ?>
        </tr>
        <tr>
            <td>
                <a href="index.php">wszystkie </a>
            </td>
            <td>
                <a href="index.php?status=created">utworzone </a>
            </td>
            <td>
                <a href="index.php?status=received">odebrane </a>
            </td>
            <td>
                <a href="index.php?status=in_progress">w trakcie </a>
            </td>
            <td>
                <a href="index.php?status=finished">ukończone</a>
            </td>
        </tr>
        <tr>
            <td colspan=5>
                <a href='/new_application/'>Dodaj nowe zgłoszenie</a>
            </td>
        </tr>
    </table>

    <br>


    <?php
    include('utils/get_batch_from_db.php');

    if (isset($_GET['offset'])) {
        $offset = intval($_GET['offset']);
    } else {
        $offset = 0;
    }

    if (isset($_GET['status'])) {
        $status = $_GET['status'];
    } else {
        $status = "";
    }

    $applications = get_full_applications($status, 50, $offset);

    if (count($applications) > 0) {
        echo "<table border='1'>" . "<tr><th>Status</th><th>Klient</th><th>Diler</th><th>Hulajnoga</th><th>Numer ramy</th><th>Data zgłoszenia</th><th>Data edycji</th><th>Opis</th><th>zmień status na utworzone</th><th>zmień status na odebrane</th><th>Zmień status na serwis Warszawa</th><th> zmień status na w trakcie</th><th>zmień status na zakończone</th><th>pokaż do druku</th><th>Edytuj</th>";
        if ($_SESSION['is_admin']) {
            echo "<th>Usuń</th>";
        }
        echo "</tr>";

        foreach ($applications as $i => $application) {
            echo "<tr>";
            echo "<td";
            switch ($application['application_status']) {
                case "created":
                    echo " class=\"created\">utworzono";
                    break;
                case "received":
                    echo " class=\"received\">odebrano";
                    break;
                case "service_wwa":
                    echo " class=\"service_wwa\">serwis Warszawa";
                    break;
                case "in_progress":
                    echo " class=\"in_progress\">w trakcie";
                    break;
                case "finished":
                    echo " class=\"finished\">ukończono";
                    break;
                default:
                    echo " class=\"unknown\">" . $application['application_status'];
                    break;
            }
            echo "</td>";
            echo "<td>" . $application['client_name'] . "</td>";
            echo "<td>" . $application['dealer_name'] . "</td>";
            echo "<td>" . $application['scooter_make'] . " " . $application['scooter_model'] . "</td>";
            echo "<td>" . $application['scooter_frame_number'] . "</td>";
            echo "<td>" . $application['application_date_created'] . "</td>";
            echo "<td>" . $application['application_date_changed'] . "</td>";
            echo "<td><div class=\"desc\">" . $application['application_description'] . "</div></td>";
            echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=" . $application['application_id'] . "><input type=\"hidden\" name=\"new_status\" value=\"created\"><input type=\"submit\" value=\"zmień\"></form></td>";
            echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=" . $application['application_id'] . "><input type=\"hidden\" name=\"new_status\" value=\"received\"><input type=\"submit\" value=\"zmień\"></form></td>";
            echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=" . $application['application_id'] . "><input type=\"hidden\" name=\"new_status\" value=\"service_wwa\"><input type=\"submit\" value=\"zmień\"></form></td>";
            echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=" . $application['application_id'] . "><input type=\"hidden\" name=\"new_status\" value=\"in_progress\"><input type=\"submit\" value=\"zmień\"></form></td>";
            echo "<td><form action=\"change_status.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=" . $application['application_id'] . "><input type=\"hidden\" name=\"new_status\" value=\"finished\"><input type=\"submit\" value=\"zmień\"></form></td>";
            echo "<td><form action=\"print.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=" . $application['application_id'] . "><input type=\"submit\" value=\"pokaż\"></form></td>";
            echo "<td><form action=\"/edit_application/edit.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=" . $application['application_id'] . "><input type=\"submit\" value=\"edytuj\"></form></td>";
            if ($_SESSION['is_admin']) {
                echo "<td><form action=\"/delete_application/delete_application_page.php\" method=\"POST\"><input type=\"hidden\" name=\"id\" value=" . $application['application_id'] . "><input type=\"submit\" value=\"usuń\"></form></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h2>brak wyników</h2>";
    }


    ?>
</body>

</html>