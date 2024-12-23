<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chickens = $_POST['chickens'];
    $cows = $_POST['cows'];
    $pigs = $_POST['pigs'];
    $totalLegs = $chickens * 2 + $cows * 4 + $pigs * 4;
    echo "Total legs: $totalLegs";
}
?>
<form method="POST">
    Chickens: <input type="number" name="chickens"><br>
    Cows: <input type="number" name="cows"><br>
    Pigs: <input type="number" name="pigs"><br>
    <input type="submit">
</form>
