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

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "repair_shop";
        
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

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
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>Klient:</td>";
                    echo "<td><input type='hidden' name='client_id' value='".$application['client_id']."' readonly>".$application['client_name']."</td>";
                }
                
            } catch (Exception $e) {
                $error_message = urlencode($e->getMessage());
                header('Location: error.php?code=500&message='.$error_message);
                exit();
            }

        ?>
        </table>
    </form>
</body>
</html>