<?php
// Database connection
$mysqli = new mysqli("localhost", "root", "", "job_portal");

// Insert application into database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $job_id = $_POST['job_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO applications (job_id, name, email) VALUES ('$job_id', '$name', '$email')";
    
    if ($mysqli->query($query)) {
        echo "Application submitted successfully!";
    } else {
        echo "Error: " . $mysqli->error;
    }
}
?>

<a href="jobs.php">Back to Job Listings</a>
