<?php
$servername = "localhost";
$username = "martins";
$password = "qwerty123$";
$database = "ninja_pizza";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>