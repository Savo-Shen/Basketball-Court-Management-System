<?php
session_start();

// 清除会话变量
unset($_SESSION['username']);
session_destroy();

// 重定向回登录页面
header('Location: login_form.php');
exit();
?>