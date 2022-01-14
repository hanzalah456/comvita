<?php
    require './config/dbc.php';

    $member_id = 1;
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = md5($_POST['password']);

    mysqli_query($connection, "INSERT INTO user(first_name, last_name, email, mobile, password)
                VALUES('$first_name', '$last_name', '$email', '$mobile', '$password')") or die(mysqli_error($connection));

    header("location:login.php");
?>