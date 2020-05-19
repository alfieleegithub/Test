<?php

// strip tags
$first_name = strip_tags(trim($_POST["first_name"]));
$last_name = strip_tags(trim($_POST["last_name"]));
$email = strip_tags(trim($_POST["email"]));
$phone = strip_tags(trim($_POST["phone"]));
$city = strip_tags(trim($_POST["city"]));
$postal_code = strip_tags(trim($_POST["postal_code"]));

$size = $_POST["size"];
$heard_from = $_POST["heard_from"];
$price = $_POST["price"];
$is_broker = $_POST["is_broker"];


// Validate first name
if (!preg_match("/^[A-Za-z\s]+$/", $first_name)) {
    http_response_code(400);
    exit("Invalid first name, please enter letters only");
}

// Validate last name
if (!preg_match("/^[A-Za-z\s]+$/", $last_name)) {
    http_response_code(400);
    exit("Invalid last name, please enter letters only");
}

// Validate email
$emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$emailIsValid) {
    http_response_code(400);
    exit("Invalid email address");
}

// Validate postal code
if (!preg_match("/^[A-Z][0-9][A-Z] ?[0-9][A-Z][0-9]$/", $postal_code)) {
    http_response_code(400);
    exit("Invalid postal code");
}

// Create connection
$conn = mysqli_connect("localhost", "alfie", "test123", "impact_north");

// Check connection
if (!$conn) {
    http_response_code(500);
    exit("Failed to connect to database");
} else {
    // Save data to database
    $sql = "INSERT INTO clients (first_name, last_name, email, phone, city, postal_code, size, heard_from, price, is_broker) VALUES ('$first_name', '$last_name', '$email', '$phone', '$city', '$postal_code', '$size', '$heard_from', '$price', '$is_broker')";
    if (mysqli_query($conn, $sql)) {
        http_response_code(200);
        echo "Registration complete!";
    } else {
        http_response_code(500);
        exit("Unable to insert");
    }
}
