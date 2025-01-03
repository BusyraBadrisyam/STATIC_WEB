<?php 
session_start();
require 'db.php'; // Include database connection file

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    die("You must log in first to place an order.");
}

// Get the logged-in user's ID from the session
$user_id = $_SESSION['user_id'];

// Get the form data
$full_name = trim($_POST['full_name']);
$quantity = intval($_POST['quantity']);
$phone_number = trim($_POST['phone_number']);
$address = trim($_POST['address']);

// Validate input
if (empty($full_name) || $quantity <= 0 || empty($phone_number) || empty($address)) {
    die("Invalid input. Please fill in all fields correctly.");
}

// Optional: Validate phone number format using regex
if (!preg_match("/^(?:\+?6?0)(?:3[1-9]|1[0-9]|4[0-9]|5[0-9]|6[0-9]|7[0-9]|8[1-9]|9[0-9])\d{7,8}$/", $phone_number)) {
    die("Invalid phone number format.");
}

// Insert the order into the database
$sql = "INSERT INTO orders (user_id, full_name, quantity, order_date) VALUES (?, ?, ?, NOW())";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Database error: " . $conn->error);
}

$stmt->bind_param("isi", $user_id, $full_name, $quantity);

if ($stmt->execute()) {
    echo "Your order has been placed successfully!";
} else {
    echo "Error placing order: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
