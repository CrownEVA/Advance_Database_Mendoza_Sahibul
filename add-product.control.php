<?php
session_start();

$servername = "localhost";
$username_db = "root";  
$password_db = "";  
$dbname = "ob"; 

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure the user is logged in and has a user_id
if (!isset($_SESSION['id'])) {
    die("Error: User not logged in.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id']; // Retrieve the logged-in user's ID
    $date_purchased = $_POST['date_purchased'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $balance = $_POST['balance'];
    $attending_physician = $_POST['attending_physician'];
    $ptr_no = $_POST['ptr_no'];
    $servicing_drug_store = $_POST['servicing_drug_store'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO booklet (id, date_purchased, item, quantity, balance, attending_physician, ptr_no, servicing_drug_store) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issdssss", $id, $date_purchased, $item, $quantity, $balance, $attending_physician, $ptr_no, $servicing_drug_store);

    // Execute
    if ($stmt->execute()) {
        echo "Purchase added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
}
$conn->close();
?>
