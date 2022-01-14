<?php

    require './config/dbc.php';

    
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($connection, "SELECT * FROM user WHERE email='$email' AND password='$password'") or die(mysqli_error($connection));

    if (mysqli_num_rows($query) > 0 )
    {
       $row = mysqli_fetch_array($query);
       $_SESSION['isValid'] = true;
       $_SESSION['firstname'] = $row['firstname'];
       $_SESSION['lastname'] = $row['lastname'];
       $_SESSION['email'] = $row['email'];
       header("location:index.php"); 
    }
    else
    {
        echo "<h1> Not Working </h1>";
    }
    
    ?>
    

    
    

 