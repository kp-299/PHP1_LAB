<?php
session_start();

function checkLogin($username, $password)
{
    if ($username == "admin" && $password == "123456") {
        return true;
    }

    return false;
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (checkLogin($username, $password)) {
        $_SESSION["is_logged_in"] = true;
        $_SESSION["username"] = $username;
        header("Location: home.php");
        exit;
    } else {
        $message = "Đăng nhập thất bại.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>

<body>
    <h2>Đăng nhập</h2>

    <form method="post">
        <p>
            Tên đăng nhập:<br>
            <input type="text" name="username">
        </p>

        <p>
            Mật khẩu:<br>
            <input type="password" name="password">
        </p>

        <button type="submit">Đăng nhập</button>
    </form>

    <p><?php echo $message; ?></p>
    <p>Tài khoản mẫu: admin / 123456</p>
</body>

</html>
