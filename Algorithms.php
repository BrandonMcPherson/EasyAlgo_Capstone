<?php
    session_start();


    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {
    session_unset();    
    session_destroy(); 
    header("Location: index.php"); 
    exit();
    }

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
    <link rel="stylesheet" href="css/Algorithms.css">
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


<body>

    <div class="container">

        <div class="toppo">
        <h1><u>Sorting & Search Algorithms!</u></h1>
                <br>
                <p>Below you can find the links to check out various interactive sorting and searching algorithm animations.</p>
        </div>
        <!--
        This project was completed with the assistance of the animation libraries provided by
        David Galles, University of San Francisco.
        
        Copyright 2011 David Galles, University of San Francisco. All rights reserved.
        Copyright 2011 David Galles, University of San Francisco. All rights reserved.
        
        Redistribution and use in source and binary forms, with or without modification, are
        permitted provided that the following conditions are met:
        
        1. Redistributions of source code must retain the above copyright notice, this list of
        conditions and the following disclaimer.
        
        2. Redistributions in binary form must reproduce the above copyright notice, this list
        of conditions and the following disclaimer in the documentation and/or other materials
        provided with the distribution.
        
        THIS SOFTWARE IS PROVIDED BY COPYRIGHT HOLDER ``AS IS'' AND ANY EXPRESS OR IMPLIED
        WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND
        FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL COPYRIGHT HOLDER OR
        CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
        CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
        SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
        ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
        NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
        ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
        
        The views and conclusions contained in the software and documentation are those of the
        authors and should not be interpreted as representing official policies, either expressed
        or implied, of the University of San Francisco-->

        <div class="links">
            <a href="A-Comparison.php">Array Sorting</a>
            <a href="A-Radix.php">Radix Sorting</a>
            <a href="A-BST.php">Binary Search Tree</a>
            <a href="A-DFS.php">Depth-First Search</a>
            <a href="A-BFS.php">Breadth-First Search</a>
            <a href="A-Hashing.php">Closed Hashing</a>
            <a href="A-OHashing.php">Open Hashing</a>
            <a href="A-Dijkstra.php">Dijkstra's Algorithm</a>
            <a href="A-RBTrees.php">Red-Black Trees</a>
            <a href="A-MinHeap.php">Binary Heaps</a>
            <a href="A-Stack.php">Stacks</a>
            <a href="A-Queue.php">Queues</a>
        </div>

    </div>
</body>
 
<?php
    include_once 'footer.php';
?>