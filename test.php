<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $env_vars = getenv();

        foreach ($env_vars as $key => $value) {
            echo $key." ".$value."<br><br>";
        }

    ?>
</body>
</html>