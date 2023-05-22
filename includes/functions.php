<?php
function emptyInputLogin($login, $password){
    if ( empty($login) || empty($password)){
        return true;
    }
    else{
        return false;
    }
}
function loginUser($conn ,$login ,$password){
    $emailExist = emailExist($conn, $login);
    $unameExist = unameExist($conn, $login);

    if($emailExist && $unameExist){
        header('location: ../login.php?login=wronglogin');
        return false;
    }
    if($emailExist !== false){
        $userExist = $emailExist;
    }else{  
        $userExist = $unameExist;
    }
    $passwordHashed = $userExist['password'];
    $passwordCheck = password_verify($password,$passwordHashed);

    if($passwordCheck){
        session_start();
        $_SESSION["user_id"] = $userExist['user_id'];
        $_SESSION["uname"] = $userExist['uname'];
        $_SESSION["name"] = $userExist['name'];
        $_SESSION["image_url"] = $userExist['image_url'];
        header("location: ../homepage.php?logged");
        exit();
    }
    else{
        header("location: ../login.php?login=wronglogin");
    }
}

function emptyInputRegister($name, $email, $password){
    if (empty($name) || empty($email) || empty($password)){
        return true;
    }
    else{
        return false;
    }
}

function unameExist($conn, $uname)
{
    $stmt = $conn->prepare("SELECT * FROM users WHERE uname = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $resultData = $stmt->get_result();
    $stmt->close();
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        return false;
    }
}
function emailExist($conn, $email)
{
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultData = $stmt->get_result();
    $stmt->close();
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        return false;
    }
}
function validEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
// function validPhone($phone) { 
//     //checks if egyptian phone is valid and accepting 01 + 9 digits
//     return preg_match('/^(01)[0-9]{9}$/', $phone);
// }

function createUser($conn, $name, $email, $uname, $password, $bdate, $image){
    $sql = "INSERT INTO users (name,email,password,uname,bdate, image_url) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../login.php?error=stmtfailed");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssis", $name, $email, $hashedPassword, $uname, $bdate, $image);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../logged.php?error=none");
    exit();
}
function addGame($conn, $title, $description, $genre, $image){
    $sql = "INSERT INTO games (title,description,genre,image_url) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../login.php?error=stmtfailed");
        exit();
    }
    // if(!$image == ''){
    //     $image = 'images/profile/default.png';
    // }
    mysqli_stmt_bind_param($stmt, "ssss", $title, $description, $genre, $image);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addgame.php?game-add=added");
    exit();
}



