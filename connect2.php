<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into your_table_name table (adjust the table name accordingly)
    $stmt = $conn->prepare("INSERT INTO coursepayment(name, address, phone, amount) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $name, $address, $phone, $amount);

    if ($stmt->execute()) {
        // Data inserted successfully, redirect to YouTube
        header("Location: https://www.youtube.com/playlist?list=PLu0W_9lII9agq5TrH9XLIKQvv0iaF2X3w");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method";
}
?>
