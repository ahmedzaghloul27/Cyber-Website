<?php

if (isset($_POST['submit'])){
    $login = $_POST['login'];
    $password = $_POST['password'];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputLogin($login, $password) !== false){
        header("Location: ../login.html?loginerror=emptyinput");
        exit();
    }
    loginUser($conn, $login, $password);
}
else{
    header("location: ../login.html");
    exit();
}