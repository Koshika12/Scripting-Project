<?php
function convertLastThreeToUpper($str) {
    if (strlen($str) < 3) {
        return strtoupper($str); // If length is less than 3, uppercase the entire string
    }
    $lastThree = strtoupper(substr($str, -3)); // Get and uppercase last 3 characters
    $firstPart = substr($str, 0, -3); // Remaining part of the string
    return $firstPart . $lastThree;
}

// Sample Inputs
echo convertLastThreeToUpper("Nepal") . "<br>";     // Output: NePAL
echo convertLastThreeToUpper("Npl") . "<br>";       // Output: NPL
echo convertLastThreeToUpper("Bca") . "<br>";       // Output: BCA
echo convertLastThreeToUpper("Bachelor") . "<br>";  // Output: BacheLOR
?>
