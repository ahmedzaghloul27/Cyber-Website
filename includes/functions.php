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
    $phoneExist = phoneExist($conn, $login);

    if($emailExist && $phoneExist){
        header('location: homepage.php?loginerror=wronglogin');
        return false;
    }
    if($emailExist !== false){
        $userExist = $emailExist;
    }else{  
        $userExist = $phoneExist;
    }
    $passwordHashed = $userExist['pwd'];
    $passwordCheck = password_verify($password,$passwordHashed);

    if($passwordCheck){
        session_start();
        $_SESSION["id"] = $userExist['ID'];
        $_SESSION["firstName"] = $userExist['name'];
        header("location: homepage.php");
        exit();
    }
    else{
        header("location: homepage.php?loginerror=wronglogin");
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

function phoneExist($conn, $phone)
{
    $stmt = $conn->prepare("SELECT * FROM users WHERE phone = ?");
    $stmt->bind_param("s", $phone);
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
function validPhone($phone) { 
    //checks if egyptian phone is valid and accepting 01 + 9 digits
    return preg_match('/^(01)[0-9]{9}$/', $phone);
}

function createUser($conn, $name, $email, $password){
    $sql = "INSERT INTO users (name,email,pwd) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: homepage.php?error=stmtfailed");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: homepage.php?error=none");
    exit();
}



