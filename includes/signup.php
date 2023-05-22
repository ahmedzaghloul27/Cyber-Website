<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $image = $_POST["profile-image"]['name'];
    $imageTemp = $_POST["profile-image"]['tmp_name'];
    

    

    $bdate = strtotime($_POST["bdate"]);
    $bdate = date('Y-m-d', $bdate);
    $gender = $_POST["gender"];

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

    createUser($conn, $name, $email, $uname, $password, $bdate, $image, $imageTemp);

} else{
    header("location: ../login.php?error=invalidpassword");
}


