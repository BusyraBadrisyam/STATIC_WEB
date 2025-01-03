<?php
session_start();
require 'db.php'; // Include database connection file

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'User not logged in']);
    exit();
}

// Get logged-in user's data from session
$user_id = $_SESSION['user_id']; // User ID
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'User'; // Username fallback

// Fetch user's orders from the `orders` table
$stmt = $conn->prepare("SELECT full_name, quantity, order_date FROM orders WHERE user_id = ? ORDER BY order_date DESC");
if (!$stmt) {
    die("Error preparing SQL statement: " . $conn->error);
}
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$orders = [];
while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}

// Handle AJAX request
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    // Return order data as JSON
    echo json_encode($orders);
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Pembelian Optalite Suplemen Mata Terbaik, Beli 50% diskaun (30 tablet)</title>
    <style>
       /* Styles here */
        #orderHistoryPopup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #f9f9f9;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            z-index: 1000;
            max-width: 500px;
            width: 90%;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .order-table th, .order-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .order-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Selamat datang ke sejarah pembelian anda !</h1>
    <button class="back-btn" onclick="goBack()">Pulang ke order</button>
    <table class="order-table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Quantity</th>
                <th>Order Date</th>
            </tr>
        </thead>
        <tbody id="orderHistoryTableBody">
            <!-- Data will be dynamically loaded here -->
        </tbody>
    </table>
</div>

    <script>
        function fetchOrderHistory() {
            fetch('order_history.php?ajax=1')
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                        return;
                    }

                    const tableBody = document.getElementById('orderHistoryTableBody');
                    tableBody.innerHTML = ''; // Clear existing data

                    data.forEach(order => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${order.full_name}</td>
                            <td>${order.quantity}</td>
                            <td>${new Date(order.order_date).toLocaleString()}</td>
                        `;
                        tableBody.appendChild(row);
                    });
                })
                .catch(error => {
                    console.error('Error fetching order history:', error);
                });
        }

        function goBack() {
            window.location.href = 'order.php';
        }

        // Fetch order history when the page loads
        window.onload = fetchOrderHistory;
    </script>
</body>

</html>
