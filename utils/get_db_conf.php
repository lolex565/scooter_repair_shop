<?php

$env = file_get_contents(__DIR__."/../.env");
        $lines = explode("\n",$env);
        
        foreach($lines as $line){
          preg_match("/([^#]+)\=(.*)/",$line,$matches);
          if(isset($matches[2])){
            putenv(trim($line));
          }
        } 

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