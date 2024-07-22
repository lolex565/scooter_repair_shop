<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main_style.css">
    <title>Document</title>
</head>
<body>
    <h1>Nowe Zgłoszenie</h1>
    <form action="add_new_application.php" method="post">
        <?php
            require('../utils/is_logged_in.php');
            include('../utils/get_by_id_from_db.php');
            if (!isset($_POST['client_id']) && !isset($_GET['client_id'])) {
                header('Location: client_chooser.php');
                exit();
            }

            if (isset($_POST['client_id'])) {
                $client_id = $_POST['client_id'];
            } else {
                $client_id = $_GET['client_id'];
            }

            if ($client_id == "") {
                header('Location: client_chooser.php');
                exit();
            }

            if (!isset($_POST['scooter_id']) && !isset($_GET['scooter_id'])) {
                header('Location: client_chooser.php');
                exit();
            }

            if (isset($_POST['scooter_id'])) {
                $scooter_id = $_POST['scooter_id'];
            } else {
                $scooter_id = $_GET['scooter_id'];
            }

            if ($scooter_id == "") {
                header('Location: scooter_chooser.php?client_id='.$client_id);
                exit();
            }

            if (!isset($_POST['dealer_id']) && !isset($_GET['dealer_id'])) {
                header('Location: dealer_chooser.php?client_id='.$client_id.'&scooter_id='.$scooter_id);
                exit();
            }

            if (isset($_POST['dealer_id'])) {
                $dealer_id = $_POST['dealer_id'];
            } else {
                $dealer_id = $_GET['dealer_id'];
            }

            if ($dealer_id == "") {
                header('Location: dealer_chooser.php?client_id='.$client_id.'&scooter_id='.$scooter_id);
                exit();
            }

            echo "<input type='hidden' name='client_id' value='".$client_id."'>";
            echo "<input type='hidden' name='scooter_id' value='".$scooter_id."'>";
            echo "<input type='hidden' name='dealer_id' value='".$dealer_id."'>";

            $client_data = get_client_by_id($client_id);
            $scooter_data = get_scooter_by_id($scooter_id);
            $dealer_data = get_dealer_by_id($dealer_id);

        ?>
        <table>
            <tr>
                <td>
                    Klient
                </td>
                <td>
                    <?php
                        echo $client_data['name'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Telefon klienta
                </td>
                <td>
                    <?php
                        echo $client_data['phone'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Hulajnoga
                </td>
                <td>
                    <?php
                        echo $scooter_data['make']." ".$scooter_data['model'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Numer ramy
                </td>
                <td>
                    <?php
                        echo $scooter_data['frame_number'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Dealer
                </td>
                <td>
                    <?php
                        echo $dealer_data['name'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Telefon dealera
                </td>
                <td>
                    <?php
                        echo $dealer_data['phone'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Data zgłoszenia
                </td>
                <td>
                    <input type="date" name="date_created">
                </td>
            </tr>
            <tr>
                <td>
                    Opis usterki
                </td>
                <td>
                    <textarea required name="description" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Złóż zgłoszenie">
                </td>
            </tr>

        </table>
    </form>
</body>
</html>