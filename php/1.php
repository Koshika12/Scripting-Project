<?php
// Creating variables
$intVar = 10;
$floatVar = 10.5;
$stringVar = "Hello, World!";
$boolVar = true;
$arrayVar = ["Apple", "Banana", "Cherry"];

// a. Print all data using echo and print
echo "Integer: $intVar\n";
print "Float: $floatVar\n";
echo "String: $stringVar\n";
print "Boolean: " . ($boolVar ? 'true' : 'false') . "\n";

// b. Display array content using print_r and var_dump
echo "Array (print_r): ";
print_r($arrayVar);
echo "Array (var_dump): ";
var_dump($arrayVar);

// c. Check and display data types
echo "Data type of intVar: " . gettype($intVar) . "\n";
echo "Data type of floatVar: " . gettype($floatVar) . "\n";
echo "Data type of stringVar: " . gettype($stringVar) . "\n";
echo "Data type of boolVar: " . gettype($boolVar) . "\n";
?>
