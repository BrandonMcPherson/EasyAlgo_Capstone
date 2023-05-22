<?php

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'db-inc.php';
    require_once 'functions-inc.php';

    if (emptyInputSignup($name, $email,$username,$pwd,$pwdrepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false){
        header("location: ../signup.php?error=invalidUid");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdCheck($pwd, $pwdrepeat) !== false){
        header("location: ../signup.php?error=mismatch");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
        
}
else{
    header("location: ../signup.php?error=none");
    exit();
}