<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p style="color: red;">Invalid username or password.</p>';
    }
    if (isset($_GET['error']) && $_GET['error'] == 2) {
        echo '<p style="color: red;">666.</p>';
    }
    ?>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>