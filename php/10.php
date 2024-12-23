<?php
function compareStringLengths($str1, $str2) {
    return strlen($str1) == strlen($str2);
}

echo "Comparison: " . (compareStringLengths("hello", "world") ? "true" : "false");
?>
