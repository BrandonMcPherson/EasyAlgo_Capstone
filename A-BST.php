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
        <link rel="stylesheet" href="css/bfs.css">
			
		<!-- jqueury stuff.  Only used for the animation speed slider. -->
		<link rel="stylesheet" href="JavascriptVisualRelease/ThirdParty/jquery-ui-1.8.11.custom.css">
				
		<script src="JavascriptVisualRelease/ThirdParty/jquery-1.5.2.min.js"></script>
		<script src="JavascriptVisualRelease/ThirdParty/jquery-ui-1.8.11.custom.min.js"></script>
				
		<!-- Javascript for the actual visualization code -->
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/CustomEvents.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/UndoFunctions.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/AnimatedObject.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/AnimatedLabel.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/AnimatedCircle.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/AnimatedRectangle.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/AnimatedLinkedList.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/HighlightCircle.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/Line.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/ObjectManager.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AnimationLibrary/AnimationMain.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AlgorithmLibrary/Algorithm.js"> </script>
		<script type = "application/javascript" src = "JavascriptVisualRelease/AlgorithmLibrary/BST.js"> </script> 
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


	
	<body onload="init();" class="VisualizationMainPage">
		
    <div id = "container">
			
			<div id="header">  
				<h1>Binary Search Tree</h1>
			</div>
			
			<div id = "mainContent"> 
				
				<div id = "algoControlSection">
					<!-- Table for buttons to control specific animation (insert/find/etc) -->
					<!-- (filled in by javascript code specific to the animtion) -->
					<table id="AlgorithmSpecificControls"> </table> 
				</div>
				
					<!-- Drawing canvas where all animation is done.  Note:  can be resized in code -->
									
				<canvas id="canvas" width="1000" height="500"></canvas>
				<div id = "generalAnimationControlSection">
					<!-- Table for buttons to control general animation (play/pause/undo/etc) ->
					<!-- (filled in by javascript code, specifically AnimationMain.js)  -->

					<table id="GeneralAnimationControls">  </table>		
				</div>
				
			</div> <!-- mainContent -->

		</div><!-- container -->
	</body>
</html>
