<?php
function sumOrTriple($a, $b) {
    return ($a === $b) ? 3 * ($a + $b) : $a + $b;
}

echo sumOrTriple(10, 10);
?>
