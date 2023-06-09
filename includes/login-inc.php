<?php
session_start();

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $_SESSION['username'] = $username;
    
    $pwd = $_POST["pwd"];

    require_once 'db-inc.php';
    require_once 'functions-inc.php';

    if (emptyInputLogin($username,$pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else{
    header("location: ../login.php");
    exit();
}