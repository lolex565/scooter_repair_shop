<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main_style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_GET['code']) && !isset($_GET['message'])) {
        echo "<h1>Nie widzę żadnego błędu</h1>";
        echo "<h2>Jak tu trafiłeś</h2>";
    } else {
       if (isset($_GET['code'])) {
            echo "<h1>Wystąpił błąd o kodzie: ".$_GET['code']."</h1>";
        } else {
            echo "<h1>Wystąpił błąd</h1>";
        }
        if (isset($_GET['message'])) {
            echo "<h2>Wiadomość błędu: ".$_GET['message']."</h2>";
        } else {
            echo "<h2>Brak dodatkowej informacji</h2>";
        }
    }

    ?>
    <h3><a href="index.php">Powrót na stronę główną</a></h3>
</body>
</html>