<?php
function calculateArea($base, $height, $shape) {
    if ($shape === "triangle") {
        return 0.5 * $base * $height;
    } elseif ($shape === "parallelogram") {
        return $base * $height;
    }
}

echo "Area: " . calculateArea(10, 20, "triangle");
?>
