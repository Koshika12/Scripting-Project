<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];
    $points = $wins * 3 + $draws;
    echo "Total points: $points";
}
?>
<form method="POST">
    Wins: <input type="number" name="wins"><br>
    Draws: <input type="number" name="draws"><br>
    Losses: <input type="number" name="losses"><br>
    <input type="submit">
</form>
