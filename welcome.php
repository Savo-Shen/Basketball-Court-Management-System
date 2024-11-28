<?php
session_start();

// 检查是否已登录
if (!isset($_SESSION['username'])) {
    header('Location: login_form.php');
    exit();
}

$username = $_SESSION['username'];
$isGoJieMian = isset($_POST['goJieMian']) ? true : false;
if ($isGoJieMian) {
    header('Location: jiemian.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>You have successfully logged in.</p>
    <form action="" method="post">
        <input style="font-size: 42px;" type="submit" name="goJieMian" value="前往查看界面">
    </form>
    <a href="logout.php">Logout</a>
</body>
</html>