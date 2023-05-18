<?php

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputLogin($email, $password) !== false){
        header("Location: homepage.php?loginerror=emptyinput");
        exit();
    }
    loginUser($conn, $email, $password);
}
else{
    header("location: homepage.php");
    exit();
}