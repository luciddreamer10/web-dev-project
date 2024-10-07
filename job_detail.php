<?php
// Database connection
$mysqli = new mysqli("localhost", "root", "", "job_portal");

// Get job details
$job_id = $_GET['id'];
$query = "SELECT * FROM jobs WHERE id = $job_id";
$result = $mysqli->query($query);
$job = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $job['title']; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo $job['title']; ?></h1>
    </header>

    <main>
        <section>
            <h2>Job Details</h2>
            <p><strong>Company:</strong> <?php echo $job['company']; ?></p>
            <p><strong>Skills Required:</strong> <?php echo $job['skills']; ?></p>
            <p><strong>Description:</strong> <?php echo $job['description']; ?></p>

            <h2>Apply for this Job</h2>
            <form method="POST" action="apply.php">
                <input type="hidden" name="job_id" value="<?php echo $job['id']; ?>">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <button type="submit">Apply</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Job Portal. All rights reserved.</p>
    </footer>
</body>
</html>
