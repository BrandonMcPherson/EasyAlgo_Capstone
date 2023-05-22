<?php

function emptyInputSignup($name, $email,$username,$pwd,$pwdrepeat){
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return  $result;
}


function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return  $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return  $result;
}

function pwdCheck($pwd, $pwdrepeat){
    $result;
    if ($pwd !== $pwdrepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return  $result;
}

function uidExists($conn, $username , $email) {
    $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss" ,$username , $email);

    mysqli_stmt_execute($stmt);

    $resultinfo = mysqli_stmt_get_result($stmt);


    if($row = mysqli_fetch_assoc($resultinfo)){
        return $row;
    }
    else{
        $result = false;
    }
    return  $result;

    mysqli_stmt_close($stmt);

}

function createUser($conn, $name, $email, $username, $password){
    $sql = "INSERT INTO users (userName, userEmail, userUid, userPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss" ,$name, $email, $username, $hashedpassword);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}


function emptyInputLogin($username,$pwd){
    $result;
    if (empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return  $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username , $username);

    if ($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPwd"];
    $checkpwd = password_verify($pwd, $pwdHashed);

    if($checkpwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    elseif ($checkpwd === true){
        session_start();
        $_SESSION['login_check'] = true;
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["useruid"] = $uidExists["userUid"];
        header("location: ../index.php");
        exit();
    }

}