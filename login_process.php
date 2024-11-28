<?php
session_start();

// 数据库配置
$servername = "localhost"; // 正确的主机地址
$username = "savo_shen";        // 你的数据库用户名
$password = "22201076";            // 你的数据库密码（如果设置了密码，请填写）
$dbname = "basketball_system";         // 你的数据库名称
$port = 3306;              // 数据库端口号

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// 检查连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 获取表单提交的数据
$user = $_POST['username'];
$pass = $_POST['password'];

// 查询数据库
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("s", $user); // 绑定参数
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // 用户存在，验证密码
    $row = $result->fetch_assoc();
    if ($pass == $row['password']) {
        // 登录成功，设置会话变量
        $_SESSION['username'] = $user;
        header('Location: welcome.php');
        exit();
    } else {
        // 密码错误
        header('Location: login_form.php?error=2');
        exit();
    }
} else {
    // 用户不存在
    header('Location: login_form.php?error=1');
    exit();
}

// 关闭连接
$stmt->close();
$conn->close();
?>