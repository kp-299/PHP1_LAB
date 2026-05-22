<?php
// bai 3
session_start();

$error = "";

// Xử lý khi người dùng nhấn nút Đăng nhập
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Kiểm tra thông tin tài khoản theo yêu cầu đề bài
    if ($username === 'admin' && $password === '123456') {
        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: home.php'); // Đăng nhập thành công, chuyển hướng sang trang chủ 
        exit();
    } else {
        $error = 'Đăng nhập thất bại!'; // Thông báo nếu sai tài khoản/mật khẩu 
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập - Lab 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            background: #3401ff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-top: 0;
            color: #333;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>ĐĂNG NHẬP</h2>

        <?php if (!empty($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="input-group">
                <input type="text" name="username" placeholder="Tên đăng nhập (admin)" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Mật khẩu (123456)" required>
            </div>
            <button type="submit" class="btn-login">Đăng nhập</button>
        </form>
    </div>

</body>

</html>