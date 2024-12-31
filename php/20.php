<?php
function fourCopiesOfFrontTwo($str) {
    if (strlen($str) < 2) {
        return $str;
    }
    $frontTwo = substr($str, 0, 2); // Get the first 2 characters
    return str_repeat($frontTwo, 4); // Repeat 4 times
}

// Sample Inputs
echo fourCopiesOfFrontTwo("C Sharp") . "<br>"; // Output: C C C C
echo fourCopiesOfFrontTwo("JS") . "<br>";      // Output: JSJSJSJS
echo fourCopiesOfFrontTwo("a") . "<br>";       // Output: a
?>
