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
        header('location: ../login.html?loginerror=wronglogin');
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
        $_SESSION["id"] = $userExist['ID'];
        $_SESSION["name"] = $userExist['name'];
        header("location: ../homepage.html");
        exit();
    }
    else{
        header("location: ../login.html?loginerror=wronglogin");
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

function createUser($conn, $name, $email, $uname, $password){
    $sql = "INSERT INTO users (name,email,password,uname) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../login.html?error=stmtfailed");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPassword, $uname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../logged.html?error=none");
    exit();
}



