<?php
    if (getenv('APP_HOST') != null) {
        $host = getenv('APP_HOST');
    } else {
        $host = "localhost:2137";
    }
?>