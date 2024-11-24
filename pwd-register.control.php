<?php
$servername = "localhost";
$username_db = "root";  
$password_db = "";  
$dbname = "ob"; 

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pwd_id_number = trim($_POST['pwd-id-number']);
    $password = trim($_POST['password']);

    if (empty($pwd_id_number) || empty($password)) {
        echo "PWD ID Number and password are required.";
        exit;
    }

    // Gather other form data
    $fullname = $_POST['fullname'];
    $type_of_disability = $_POST['type_of_disability'];
    $date_of_birth = $_POST['date_of_birth'];
    $blood_type = $_POST['blood_type'];
    $address = $_POST['address'];
    $date_issued = $_POST['date_issued'];
    $guardian_name = $_POST['guardian_name'];
    $guardian_contact_number = $_POST['guardian_contact_number'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO pwd_id 
        (pwd_id_number, password, full_name, type_of_disability, date_of_birth, blood_type, address, date_issued, guardian_name, guardian_contact_number) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters for all 10 fields
    $stmt->bind_param("ssssssssss", 
        $pwd_id_number, 
        $hashed_password, 
        $fullname, 
        $type_of_disability, 
        $date_of_birth, 
        $blood_type, 
        $address, 
        $date_issued, 
        $guardian_name, 
        $guardian_contact_number
    );

    if ($stmt->execute()) {
        echo "Registration successful!";
        
        header("Location: pwd-login.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
