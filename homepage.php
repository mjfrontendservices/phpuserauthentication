<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <section>
        <h2>
            Welcome <?php echo $_SESSION['user_fname']?>
        </h2>
        <a href="about.php">About</a>
        <a href="logout.php" name="logout">Logout</a>
    </section>
</body>
</html>