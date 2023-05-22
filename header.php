<?php
    session_start();
    // var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/160023570f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="general.css">


    <link rel = "icon" href = 
    "Images/icons8-game-48.png" 
            type = "image/x-icon">

    <title>Document</title>
</head>

<body>
    <div class="header-container">
        <header id="header">
            <div class="logo-links">
                <a href="homepage.php">
                    <img src="Images/logo.png" alt="el-cyber">
                </a>
                <ul class="nav-list">
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="gametik.php">GameTik</a></li>
                    <li><a href="gamelibrary.php">Browse Library</a></li>
                </ul>
            </div>
            <div class="header-nav-buttons">
                <!-- <button class="request-game-button"><a href="request.php">Request Game</a></button> -->
                <?php
                if (isset($_SESSION['user_id'])){
                    $name = $_SESSION['name'];
                    $uName = $_SESSION['uname'];
                    $imageUrl = $_SESSION['image_url'];
                        echo '
                        <div class="profile-element">
                            <div class="profile-header">
                                <span class="profile-name">' . $uName . '</span>
                                <img src="' . $imageUrl .'" alt="Profile Picture">
                            </div>
                            <div class="profile-dropdown">
                                <a href="profile.php">Notification</a>
                                <a href="profile.php">Friends</a>
                                <a href="profile.php">Messages</a>
                                <a href="profile.php">Profile</a>
                                <a href="includes/logout.php">Logout</a>
                            </div>
                        </div>
                        ';
                    }
                else{
                        echo '<button><a href="login.php">Login</a></button>';
                    }
                ?>
            <style>
                .register-error{
                    display: inline;
                }
            </style>
            </div>
        </header>

    </div>