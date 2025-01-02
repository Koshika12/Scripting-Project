<?php
if (isset($_GET['country'])) {
    $country = $_GET['country'];

    // Sample city data based on country
    $cities = [];

    if ($country == "India") {
        $cities = ["Delhi", "Mumbai", "Kolkata", "Chennai"];
    } elseif ($country == "USA") {
        $cities = ["New York", "Los Angeles", "Chicago", "Houston"];
    } elseif ($country == "UK") {
        $cities = ["London", "Manchester", "Birmingham", "Leeds"];
    }

    // Return the cities as a JSON response
    echo json_encode($cities);
}
?>
