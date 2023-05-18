<?php

if(isset($_POST["submit"])){
     $name = $_POST["name"];
     $email = $_POST["email"];
     $password = $_POST["password"];


     require_once 'dbh.php';
     require_once 'functions.php';

    if(emptyInputRegister($name, $email, $password)){
        header("location: homepage.php?error=emptyinput");
        exit();
    }
    if(!validEmail($email)){
        header("location: homepage.php?error=invalidemail");
        exit();
    }
    if(emailExist($conn, $email)){
        header("location: homepage.php?error=emailexist");
        exit();
    }

    createUser($conn, $name, $email, $password);

} else{
    header("location: /homepage.php?error=invalidpassword");
}


