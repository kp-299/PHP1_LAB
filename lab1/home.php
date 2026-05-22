<?php
session_start();

function isLoggedIn()
{
    if (isset($_SESSION["is_logged_in"]) && $_SESSION["is_logged_in"] == true) {
        return true;
    }

    return false;
}

if (!isLoggedIn()) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
</head>

<body>
    <h2>Trang chủ</h2>
    <p>Chào mừng <?php echo $_SESSION["username"]; ?>!</p>
    <p><a href="logout.php">Đăng xuất</a></p>
</body>

</html>
