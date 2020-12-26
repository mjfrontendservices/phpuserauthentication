<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="control.php" method="POST">
        <input type="text" name="firstname" placeholder="First name"><br>
        <input type="text" name="middlename" placeholder="Middle name"><br>
        <input type="text" name="lastname" placeholder="Last name"><br>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit" name="register_button">Register</button>
    </form>
    <a href="index.php">Log in</a>
</body>
</html>