<?php

if(isset($_POST["submit"])){
     $name = $_POST["name"];
     $email = $_POST["email"];
     $uname = $_POST["uname"];
     $password = $_POST["password"];
    //  $birthday = $_POST["birthday"];


     require_once 'dbh.php';
     require_once 'functions.php';

    if(emptyInputRegister($name, $email, $password)){
        header("location: ../login.html?error=emptyinput");
        exit();
    }
    if(!validEmail($email)){
        header("location: ../login.html?error=invalidemail");
        exit();
    }
    if(emailExist($conn, $email)){
        header("location: ../login.html?error=emailexist");
        exit();
    }
    if(unameExist($conn, $uname)){
        header("location: ../login.html?error=unameexist");
        exit();
    }

    createUser($conn, $name, $email, $uname, $password);

} else{
    header("location: ../login.html?error=invalidpassword");
}


