<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
</head>
<body>
    <h2>Chào mừng, <?= htmlspecialchars($_SESSION['user']['username']) ?>!</h2>
    <p>Bạn đã đăng nhập hệ thống thành công bằng mô hình MVC cơ bản.</p>
    <a href="index.php?action=logout">Đăng xuất</a>
</body>
</html>