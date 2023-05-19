<?php
    
if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $genre = $_POST['genre'];
    $image = $_POST['image'];

    require_once 'dbh.php';
    require_once 'functions.php';

    addGame($conn, $title, $description, $genre, $image);
}
else{
    header("location: ../addgame.html?game-add=failed");
    exit();
}
