<?php

$conn = mysqli_connect("localhost", "root",  "", "thecyber");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
