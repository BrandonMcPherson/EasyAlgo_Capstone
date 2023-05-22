<?php
session_start();
if(isset($_POST["score"]) && isset($_SESSION["username"])){
    require_once 'includes/db-inc.php';

    $score = $_POST["score"];
    $username = $_SESSION["username"];

    // Check if username exists in database
    $stmt = $conn->prepare("SELECT * FROM Leaderboard WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        // if Username exists check if score is higher than current score
        $row = $result->fetch_assoc();
        if($score > $row["score"]) {
            // Update score
            $stmt = $conn->prepare("UPDATE Leaderboard SET score = ? WHERE username = ?");
            $stmt->bind_param("is", $score, $username);
            $stmt->execute();
            $stmt->close();
            echo "Score updated for ".$username.".";
        } else {
            echo "Score not updated because it is not higher than the current score.";
        }
    } else {
        // Username does not exist then insert new row
        $stmt = $conn->prepare("INSERT INTO Leaderboard (username, score) VALUES (?, ?)");
        $stmt->bind_param("si", $username, $score);
        $stmt->execute();
        $stmt->close();
        echo "Score added to the database for new user ".$username.".";
    }
}

?>
