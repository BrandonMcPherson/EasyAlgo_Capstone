<?php
    include_once 'header.php';
?>

<style>
    table {
    
    justify-content: center;
    align-items: center;
    position: relative;
    width: 55%;
    background-color: #fff;
    border: 2px solid rgba(255, 255, 255, 0.5);
    backface-visibility: blur(15px);
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    }

    th, td {
    padding: 10px;
    border: none;
    border-bottom: 2px solid #eee;
    }

    th {
    background-color: #522b6e;
    color: #fff;
    font-weight: 500;
    }

    tr:nth-child(even) {
    background-color: #f2f2f2;
    }

    tr:hover {
    background-color: #ddd;
    }

</style>

<?php
require_once 'includes/db-inc.php';

$sql = "SELECT username, score FROM Leaderboard ORDER BY score DESC";
$result = mysqli_query($conn, $sql);


echo "<table>";
echo "<tr><th>Username</th><th>Score</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["username"] . "</td><td>" . $row["score"] . "</td></tr>";
}
echo "</table>";


mysqli_close($conn);
?>


<?php
    include_once 'footer.php';
?>