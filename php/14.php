<?php
function findIndex($arr, $str) {
    return array_search($str, $arr);
}

echo "Index: " . findIndex(["apple", "banana", "cherry"], "banana");
?>
