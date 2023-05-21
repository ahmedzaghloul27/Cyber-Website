<?php
    include_once 'header.php';
?>
    <!-- ai stands for adobe illustration -->
    <div class="illustrations">
        <img src="Images/ai2.png" alt="ai1">
        <img src="Images/ai1.png" alt="ai2">
    </div>
    <div class="login-screen">
        <div style="position:relative">
            <button class="back-button" onclick="goBack()"></button>
            <div class="login-body">
                <div class="window-header">
                    <span class="line"></span>
                    <div class="circles-div">
                        <span class="circle item1"></span>
                        <span class="circle item2"></span>
                        <span class="circle item3"></span>
                    </div>
                </div>
                <form class="login-window" action="includes/login.inc.php" method="post">
                    <div class="right-content">
                        <div class="text">
                            <p>Hello, Friend!</p>
                            <p>Enter your details to start your<br>journey with us</p>
                        </div>
                        <a href="#" class="sign hover-effect">Sign Up</a>
                    </div>
                    <div class="left-content">
                        <div class="buttons">
                            <div class="button hover-effect">
                                <a href="#" title="login with facebook"><img src="Images/facebook.png" alt="facebook"></a>
                            </div>
                            <div class="button hover-effect">
                                <a href="#" title="login with google"><img src="Images/google.png" alt="google"></a>
                            </div>
                            <div class="button hover-effect">
                                <a href="#" title="login with apple"><img src="Images/apple-logo.png" alt="apple"></a>
                            </div>
                        </div>
                        
                        <div action="" class="form">
                            <label for="email">
                                <input type="text" name="login" placeholder="Email or username" required>
                            </label>
                            <label for="password">
                                <input type="password" placeholder="Password" name="password" required>
                            </label>
                            <?php
            if (isset($_GET['login'])) {
                if($_GET['login'] == "emptyinput"){
                    echo    "<i class=\"fa fa-circle-info\" style=\"color:red; font-size:20px\"></i>
                    <p class=\"register-error\">Fill in all fields</p>";
                }
                else if($_GET["login"] == "wronglogin"){
                    echo "<div>
                    <i class=\"fa fa-circle-info\" style=\"color:red; font-size:20px; \"></i>
                    <p class=\"register-error\">Incorrect login information!</p>
                    </div>";
                }
            }
            ?>
            <style>
                .register-error{
                    font-size: 20px !important;
                    display: inline;
                }
            </style>
                            <a href="#" class="pass"><u>Forgot Password?</u></a>
                            <input type="submit" name="submit" class="hover-effect" value="Login">
                        </div>
                        <p>Login</p>
                    </div>
                </form>
                <form class="sign-window" action="includes/signup.php" method="post">
                    <div class="window-content">
                        <div class="left-content">
                            <div action="" class="form">
                                <label for="name">
                                    <input type="text" name="name"  placeholder="Name">    
                                </label>
                                <label for="email">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </label>
                                <label for="bdate">
                                    <input type="date" name="bdate" placeholder="Birthday">
                                </label>
                                <label for="password">
                                    <input type="password" id="reg-password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                </label>
                                <label for="password">
                                    <input type="password" id="reg-password-confirm" placeholder="Confirm password" name="password" required>
                                </label>
                                <a href="#" class="pass"><u>already have an account? login</u></a>
                            </div>
                        </div>
                        <div class="right-content">
                            <img src="Images/sign-bg.png" alt="">
                            <a class="button-theme continue-button">Continue</a>
                        </div>
                        <div class="continue-content form">
                            <div class="user-img">
                                <img src="Images/game-pic.png" alt="">
                                <input type="file" id="profile-image" name="profile-image">
                                <label for="profile-image">
                                    <i class="fa-solid fa-pen"></i>
                                </label>
                            
                            </div>
                            <label for="uname">
                                <input type="text" name="uname" id="email" placeholder="User Name"  required>
                            </label>
                            <a>
                                <input type="submit" class="hover-effect" value="Sign Up" name="submit">
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="general.js"></script>
</body>

</html>