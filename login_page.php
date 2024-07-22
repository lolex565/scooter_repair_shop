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
        require('utils/is_logged_in_login_pages.php');
    ?>
    <h1>Zaloguj się</h1>
    <form action="/login.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login">
        <label for="password">Hasło:</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Zaloguj">
    </form>
    <h2>Nie masz konta?</h2>
    <a href="register_page.php">Utwórz konto</a>
</body>
</html>