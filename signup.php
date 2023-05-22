<?php
    include_once 'header.php';
?>

<section class="signup-form">
    <div class="signup-form-form">
        <h2>Sign Up</h2>
        <form action="includes/signup-inc.php" method="post">
            
            <div class="input-box">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" class="form-control" placeholder="Joe Brown" name="name">
                <label for="" class="form-label">Full Name</label>
            </div>

            <div class="input-box">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" class="form-control" placeholder="JoeBrown@gmail.com" name="email">
                <label for="" class="form-label">Email</label>
            </div>

            <div class="input-box">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" class="form-control" placeholder="JBrown" name="uid">
                <label for="" class="form-label">Username</label>
            </div>

            <div class="input-box">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" class="form-control" placeholder="********" name="pwd">
                <label for="" class="form-label">Password</label>
            </div>

            <div class="input-box">
                <ion-icon name="shield-checkmark-outline"></ion-icon>
                <input type="password" class="form-control" placeholder="********" name="pwdrepeat">
                <label for="" class="form-label">Repeat Password</label>
            </div>

            <button type="submit" name="submit">Sign Up</button>

            <div id="submit-message">
                <?php
                if (isset($_GET["error"])){
                    if (($_GET["error"]) == "emptyinput"){
                        echo '<p class="submit-message">Please Fill In All Fields</p>';
                    }
                    else if (($_GET["error"]) == "invalidUid"){
                        echo '<p class="submit-message">Enter a Valid Username</p>';
                    }
                    else if (($_GET["error"]) == "invalidemail"){
                        echo '<p class="submit-message">Enter a valid Email</p>';
                    }
                    else if (($_GET["error"]) == "mismatch"){
                        echo '<p class="submit-message">Passwords Do not Match</p>';
                    }
                    else if (($_GET["error"]) == "usernametaken"){
                        echo '<p class="submit-message">Username is Taken</p>';
                    }
                    else if (($_GET["error"]) == "stmtfailed"){
                        echo '<p class="submit-message">Something Went Wrong.</p>';
                    }
                    else if (($_GET["error"]) == "none"){
                        echo '<p class="submit-message">You Have Been Registered.</p>';
                    }
                }
                ?>
            </div>
        </form>
    </div>


</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php
    include_once 'footer.php';
?>