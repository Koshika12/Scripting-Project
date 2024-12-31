<?php
function diffWith51($n) {
    return ($n > 51) ? 3 * abs($n - 51) : abs($n - 51);
}

echo diffWith51(60);
?>
