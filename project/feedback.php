<?php
require 'db.php'; // Include your database connection file

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $input = json_decode(file_get_contents('php://input'), true);
    $username = $input['username'] ?? '';
    $state = $input['state'] ?? '';
    $feedback = $input['feedback'] ?? '';

    if (!empty($username) && !empty($state) && !empty($feedback)) {
        $stmt = $conn->prepare("INSERT INTO feedback (username, state, feedback) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $state, $feedback);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'username' => $username, 'state' => $state, 'feedback' => $feedback]);
        } else {
            echo json_encode(['success' => false, 'error' => $conn->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'error' => 'All fields are required.']);
    }
} else {
    // Retrieve feedback from the database
    $result = $conn->query("SELECT username, state, feedback FROM feedback ORDER BY id DESC");
    $feedback = [];

    while ($row = $result->fetch_assoc()) {
        $feedback[] = $row;
    }

    echo json_encode($feedback);
}
?>
