<?php
// Database connection
$mysqli = new mysqli("localhost", "root", "", "job_portal");

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $mysqli->query($query);
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            echo "Login successful!";
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with that username.";
    }
}
?>
