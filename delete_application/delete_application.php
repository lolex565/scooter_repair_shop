<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("../utils/is_logged_in.php");
    include("../utils/delete_from_db.php");
    if (!$_SESSION['is_admin']) {
        $message = urlencode("Nie masz uprawnień do usunięcia zgłoszenia");
        $code = 401;
        header("Location: /error.php?message=$message&code=$code");
    }
    if (!isset($_POST['application_id'])) {
        header("Location :/index.php");
    }
    $application_id = $_POST['application_id'];
    $table_name = "repair_application";
    delete_from_db($table_name, $application_id);
    echo "<h1>Pomyślnie usunięto zgłoszenie o id: ".$application_id."</h1>";
    echo "<h2><a href=\"/index.php\">Powrót do strony głównej</a></h2>";
    ?>
</body>

</html>