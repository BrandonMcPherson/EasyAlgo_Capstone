<?php
    session_start();


    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    session_unset();    
    session_destroy(); 
    header("Location: index.php"); 
    exit();
    }

    // Update LAST_ACTIVITY time stamp
    $_SESSION['LAST_ACTIVITY'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyAlgo</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body{
        background-image: url("background-pic.jpg");
        background-size: cover;
        background-position: center;
    }
    </style>
</head> 
    <nav>
        <div class="wrapper">
            <h2 class = "logo" > <img src="pics/Logo2.png" alt="EasyAlgo Logo"> EasyAlgo</h2>
                <div class ="nav">
                    <?php
                    if(isset($_SESSION['username']) && isset($_SESSION['login_check']) && $_SESSION['login_check'] === true) {
                        echo '<span style="color: white; font-size: 20px; padding-right: 40px;">Welcome, ' . $_SESSION['username'] . '</span>';
                    }
                    ?>
                    <a href="index.php">Home</a>
                    <a href="Algorithms.php">Algorithms</a>
                    <a href="leaderboard.php">Leaderboard</a>
                    <?php
                        if (isset($_SESSION["useruid"])){
                            echo "<a href='quiz.php'>Quiz</a>";
                            echo "<a href='includes/logout-inc.php'>Logout</a>";
                        }
                        else{
                            echo "<a href='signup.php'>Sign Up</a>";
                            echo "<a href='login.php'>Login</a>";
                        }
                    ?>
                </div>
        </div>
    </nav>
