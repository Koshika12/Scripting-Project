<?php
function addLastCharToFrontAndBack($str) {
    $lastChar = substr($str, -1); // Get the last character
    return $lastChar . $str . $lastChar;
}

// Sample Inputs
echo addLastCharToFrontAndBack("Red") . "<br>";   // Output: dRedd
echo addLastCharToFrontAndBack("Green") . "<br>"; // Output: nGreenn
echo addLastCharToFrontAndBack("1") . "<br>";     // Output: 111
?>
