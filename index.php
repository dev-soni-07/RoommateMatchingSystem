<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="index.js"></script>
    <title>Roommate Matching System</title>
</head>

<body>
    <header>
        <h1>Roommate Matching System</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Find a Roommate</a></li>
            <li><a href="#">Submit a Profile</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>
    <main>
        <h2>Find Your Perfect Roommate</h2>
        <form action="submit_profile.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>Copyright &copy; 2023 Roommate Matching System</p>
    </footer>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        // Save the profile to a database or send an email to admin
    }
    ?>

</body>

</html>