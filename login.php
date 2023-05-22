<?php
    include_once 'header.php';
?>

<section class="login-form">
    <div class="login-form-form">
        <h2>Login</h2>
        <form action="includes/login-inc.php" method="post">

            <div class="input-box">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" class="form-control" placeholder="JoeBrown@gmail.com" name="username" required>
                <label for="" class="form-label">Email or Username</label>
            </div>

            <div class="input-box">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" class="form-control" placeholder="********" name="pwd" required>
                <label for="" class="form-label">Password</label>
            </div>

            <button type="submit" name="submit">Login</button>

            <div id="submit-message">
            <?php
            if (isset($_GET["error"])){
                if (($_GET["error"]) == "emptyinput"){
                    echo '<p class="submit-message">Please Fill In All Fields</p>';
                }
                else if (($_GET["error"]) == "wronglogin"){
                    echo '<p class="submit-message">Incorrect Credentials</p>';
                }
            }
            ?>
            </div>
            
        </form>
    </div>