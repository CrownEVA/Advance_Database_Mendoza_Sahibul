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

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['login_error'] = "Username and password are required.";
        header("Location: login-PG.php");
        exit;
    }

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        
        if (password_verify($password, $hashed_password)) {
            
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['logged_in'] = time();

            
            header("Location: pwd-login.php");
            exit;
        } else {
            $_SESSION['login_error'] = "Invalid password.";
            header("Location: login-PG.php");
            exit;
        }
    } else {
        $_SESSION['login_error'] = "Invalid username.";
        header("Location: login-PG.php");
        exit;
    }

    $stmt->close();
    $conn->close();
    } else {
        
        unset($_SESSION['login_error']);
    }
?>
