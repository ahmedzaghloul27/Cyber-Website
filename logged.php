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
                <div class="logged-window form">
                    <i class="fa-solid fa-check"></i>
                    <h1>Your Account has been created successfully</h1>
                    <a href="login.php" class="button-theme continue-button">Login</a>
                </div>
            </div>
        </div>
    </div>

    <script src="general.js"></script>
</body>

</html>