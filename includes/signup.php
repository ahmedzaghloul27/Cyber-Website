<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $gender = $_POST["img"];
    
    $bdate = strtotime($_POST["bdate"]);
    $bdate = date('Y-m-d', $bdate);


     require_once 'dbh.php';
     require_once 'functions.php';

    if(emptyInputRegister($name, $email, $password)){
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    if(!validEmail($email)){
        header("location: ../login.php?error=invalidemail");
        exit();
    }
    if(emailExist($conn, $email)){
        header("location: ../login.php?error=emailexist");
        exit();
    }
    if(unameExist($conn, $uname)){
        header("location: ../login.php?error=unameexist");
        exit();
    }

    createUser($conn, $name, $email, $uname, $password, $bdate);

} else{
    header("location: ../login.php?error=invalidpassword");
}


