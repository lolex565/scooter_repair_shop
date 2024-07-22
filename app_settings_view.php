<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main_style.css">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td colspan="2">
                <a href="index.php">Powrót do strony głównej</a>
            </td>
        </tr>
        <tr>
            <th>
                Ustawienie
            </th>
            <th>
                Klucz
            </th>
        </tr>

        <?php
        require('utils/is_logged_in.php');
        if (!$_SESSION['is_admin']) {
            header("Location :index.php");
        }
        foreach (getenv() as $key => $value) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
        }

        ?>
    </table>

</body>

</html>