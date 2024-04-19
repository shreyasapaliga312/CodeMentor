<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];
    $bookName = $_POST['bookName'];

    // Validate amount
    if ($amount != 5000) {
        echo "Invalid amount. Please enter the correct amount (Rupees 5000).";
        exit;
    }

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into bookpayment table (adjust the table name accordingly)
    $stmt = $conn->prepare("INSERT INTO bookpayment(name, address, phone, amount, bookName) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdss", $name, $address, $phone, $amount, $bookName);

    if ($stmt->execute()) {
        // Data inserted successfully, redirect to payment_successful.html after 2 seconds
        header("Refresh: 2; URL=payment_sucessful.html");

        // Additional redirection to another_page.html after a total of 4 seconds
       

        exit(); // Ensure that no further code is executed after the redirects
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
