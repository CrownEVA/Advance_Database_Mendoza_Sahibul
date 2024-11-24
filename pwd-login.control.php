<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username_db = "root";  
    $password_db = "";  
    $dbname = "ob"; 

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $pwd_id_number = $_POST['pwd_id_number'];
    $password = $_POST['password'];

    if (empty($pwd_id_number) || empty($password)) {
        $_SESSION['pwd_login_error'] = "PWD ID number and password are required.";
        header("Location: pwd-login.php");
        exit;
    }

    $stmt = $conn->prepare("SELECT pwd_id_number, password FROM pwd_id WHERE pwd_id_number = ?");
    $stmt->bind_param("s", $pwd_id_number);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($pwd_id_number, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['pwd_id_number'] = $pwd_id_number;

            header("Location: Account-Page.php");
            exit;
        } else {
            $_SESSION['pwd_login_error'] = "Invalid password.";
            header("Location: pwd-login.php");
            exit;
        }
    } else {
        $_SESSION['pwd_login_error'] = "Invalid PWD ID.";
        header("Location: pwd-login.php");
        exit;
    }

    $stmt->close();
    $conn->close();
    }else {
        unset($_SESSION['pwd_login_error']);
    }
?>
