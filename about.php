<?php
    $data = json_decode(file_get_contents('users.json'), true);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
<section>
        <h2>
            About Page <?php echo $_SESSION['user_fname']?>
        </h2>
        <a href="homepage.php">Home</a>
        <a href="logout.php" name="logout">Logout</a>
    </section>
</body>
</html>