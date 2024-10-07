<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the Job Portal</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="jobs.php">Job Listings</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Search for Jobs</h2>
            <form method="GET" action="jobs.php">
                <input type="text" name="search" placeholder="Enter job title, skills, or company">
                <button type="submit">Search</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Job Portal. All rights reserved.</p>
    </footer>
</body>
</html>
