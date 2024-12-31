<?php
function addFirstThreeToFrontAndBack($str) {
    $firstThree = substr($str, 0, 3); // Get the first 3 characters
    return $firstThree . $str . $firstThree;
}

// Sample Inputs
echo addFirstThreeToFrontAndBack("Python") . "<br>"; // Output: PytPythonPyt
echo addFirstThreeToFrontAndBack("JS") . "<br>";     // Output: JSJSJS
echo addFirstThreeToFrontAndBack("Code") . "<br>";   // Output: CodCodeCod
?>
