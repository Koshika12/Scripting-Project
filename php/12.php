<?php
function stringLength($str) {
    return ($str === "") ? 0 : 1 + stringLength(substr($str, 1));
}

echo "String length: " . stringLength("hello");
?>
