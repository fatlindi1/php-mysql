<?php
$conn = new mysqli("localhost", "root", "", "mod12");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>