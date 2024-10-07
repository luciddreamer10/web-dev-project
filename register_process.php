<?php
// Database connection
$mysqli = new mysqli("localhost", "root", "", "job_portal");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if ($mysqli->query($query)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $mysqli->error;
    }
}
?>
