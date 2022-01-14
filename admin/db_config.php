<?php

    define('DB_HOST', 'locathost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'test');

    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>