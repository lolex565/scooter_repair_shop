<?php

if (getenv('APP_ENV') == 'PROD') {
    $servername = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');
    $dbname = getenv('DB_NAME');
} else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "repair_shop";
}

?>