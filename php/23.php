<?php
function findLargest($a, $b, $c) {
    return max($a, $b, $c);
}

// Sample Inputs
echo "Largest: " . findLargest(10, 25, 15) . "<br>"; // Output: 25
echo "Largest: " . findLargest(5, 3, 9) . "<br>";   // Output: 9
?>
