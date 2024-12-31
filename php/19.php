<?php
function addIfPrefix($str) {
    // Check if the string already starts with "if"
    if (substr($str, 0, 2) === "if") {
        return $str; // Return unchanged
    } else {
        return "if " . $str; // Prepend "if"
    }
}

// Sample inputs
echo addIfPrefix("if else") . "<br>"; // Correct output: if else
echo addIfPrefix("else") . "<br>";    // Correct output: if else
echo addIfPrefix("if") . "<br>";      // Correct output: if
?>
