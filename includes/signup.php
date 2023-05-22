<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $uname = $_POST["uname"];
    $password = $_POST["password"];
    $image = $_POST["profile-image"]['name'];
    
    $uploadDirectory = 'images/profile/';

    // If the user has uploaded a profile picture
    if($image !== "") {
        // Generate a unique file name for the uploaded image
        $imageFileName = uniqid() . '_' . $image;
        $targetPath = $uploadDirectory . $imageFileName;

        // Move the uploaded file to the desired location
        if(move_uploaded_file($_FILES["profile-image"]["tmp_name"], $targetPath)) {
            // Image uploaded successfully, update the image URL in the database
            $imageURL = $targetPath;
        } else {
            // Error occurred while uploading the image
            header("location: ../login.php?error=uploadfailed");
            $imageURL = 'images/profile/default.png';
            exit();
        }
    } else {
        // Use the default profile picture URL if no image is uploaded
        $imageURL = 'images/profile/default.png';
    }

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

    createUser($conn, $name, $email, $uname, $password, $bdate,$image);

} else{
    header("location: ../login.php?error=invalidpassword");
}


