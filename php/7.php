<?php
function calculatePower($voltage, $current) {
    return $voltage * $current;
}

echo "Power: " . calculatePower(220, 5);
?>
