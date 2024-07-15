<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add_new_application.php" method="post">
        <table>
            <tr>
                <td>Imie klienta</td>
                <td><input required type="text" name="client_name"></td>
            </tr>
            <tr>
                <td>Nazwisko klienta</td>
                <td><input required type="text" name="client_surname"></td>
            </tr>
            <tr>
                <td>Telefon klienta</td>
                <td><input required type="text" name="client_phone"></td>
            </tr>
            <tr>
                <td>Marka hulajnogi</td>
                <td><input required type="text" name="scooter_make"></td>
            </tr>
            <tr>
                <td>Model hulajnogi</td>
                <td><input required type="text" name="scooter_model"></td>
            </tr>
            <tr>
                <td>Numer ramy hulajnogi</td>
                <td><input required type="text" name="scooter_frame_number"></td>
            </tr>
            <tr>
                <td>Opis usterki</td>
                <td><textarea required name="description"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"></td>
            </tr>
        </table>
        
    </form>
</body>
</html>