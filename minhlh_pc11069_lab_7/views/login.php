<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>ĐĂNG NHẬP</h2>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>

    <form action="index.php?action=login" method="POST">
        <label>Tài khoản:</label><br>
        <input type="text" name="username" value="<?= $_COOKIE['remember_username'] ?? '' ?>" required><br><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password" value="<?= $_COOKIE['remember_password'] ?? '' ?>" required><br><br>

        <input type="checkbox" name="remember" id="remember" <?= isset($_COOKIE['remember_username']) ? 'checked' : '' ?>>
        <label for="remember">Ghi nhớ mật khẩu (*)</label><br><br>

        <button type="submit">Đăng nhập</button>
    </form>
    <p>Chưa có tài khoản? <a href="index.php?action=register">Đăng ký ngay</a></p>
</body>
</html>