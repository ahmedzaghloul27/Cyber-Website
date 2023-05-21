<?php

session_start();
session_unset();
session_destroy();
header("Location: ../homepage.php");
// header('Location: '.$_SERVER['PHP_SELF']);
exit();