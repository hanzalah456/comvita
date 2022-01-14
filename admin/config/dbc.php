<?php

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'YOURNEWPASSWORD');
    define('DB_NAME', 'test');

    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    var_dump($connection);

      if ($connect->connect_error) {
        die("Connection failed:" . $connect->connect_error);
      } 
      echo "Connected successfully";
?>