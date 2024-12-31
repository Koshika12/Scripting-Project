<?php
function carsNeeded($people) {
    return ceil($people / 5);
}

echo "Cars needed: " . carsNeeded(23);
?>
