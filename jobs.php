<?php
// Database connection
$mysqli = new mysqli("localhost", "root", "", "job_portal");

// Job search functionality
$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM jobs WHERE title LIKE '%$search%' OR company LIKE '%$search%' OR skills LIKE '%$search%'";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Job Listings</h1>
    </header>

    <main>
        <section>
            <h2>Available Jobs</h2>
            <ul>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <li>
                        <a href="job_detail.php?id=<?php echo $row['id']; ?>">
                            <?php echo $row['title'] . " at " . $row['company']; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Job Portal. All rights reserved.</p>
    </footer>
</body>
</html>
