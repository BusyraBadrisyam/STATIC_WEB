<?php
// db.php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = "";     // Leave blank for XAMPP
$database = "loginsystem";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
