<?php
define("PI", 3.14159);

function calculateCircleArea($radius) {
    return PI * $radius * $radius;
}

$radius = 5; // Example radius
echo "Area of the circle: " . calculateCircleArea($radius);
?>
