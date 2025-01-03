<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $username = $_POST['username'];

    // Check if the email already exists
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email already registered. Please log in.');</script>";
    } else {
        // Insert the new user into the database
        $sql = "INSERT INTO users (email, password, username) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Error preparing SQL statement: " . $conn->error);
        }

        $stmt->bind_param("sss", $email, $hashed_password, $username);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful! Please log in.'); window.location = 'login.php';</script>";
        } else {
            echo "<script>alert('Error during registration. Please try again.');</script>";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-color: #f0f8ff; /* Light blue background */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .container h2 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }

        .container label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        .container input {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            margin-left: auto; /* Centers the input */
            margin-right: auto; /* Centers the input */
        }

        .container button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #1e90ff;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #0056b3;
        }

        .container .link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007BFF;
            font-size: 14px;
            text-decoration: none;
        }

        .container .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>DAFTAR AKAUN</h2>
        <form method="POST">
            <label for="email">Emel:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Kata Laluan:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="username">Nama Pengguna:</label>
            <input type="text" id="username" name="username" required>
            
            <button type="submit">Daftar Akaun</button>
        </form>
        <a href="login.php" class="link">Sudah mempunyai akaun berdaftar ? Log masuk.</a>
    </div>
</body>
</html>
