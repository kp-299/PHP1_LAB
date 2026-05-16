<?php
session_start();

$correct_user = "ngoxuanhieu";
$correct_pass = "hieuxuanngo";

$message = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $correct_user && $password == $correct_pass) {
        $_SESSION['user'] = $username;
        $message = "Đăng nhập thành công!";
    } else {
        $message = "Sai tài khoản hoặc mật khẩu!";
    }
}


if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: lienhe.php");
}

?>

<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>


    <div class="container mt-5" id="login">

        <?php if ($message != ""): ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php endif; ?>

        <div class="row">

            <div class="col-md-5">
                <h4>Đăng nhập</h4>

                <?php if (!isset($_SESSION['user'])): ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label>Tài khoản</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="submit" name="login" class="btn btn-primary">Đăng nhập</button>
                    </form>
                <?php else: ?>
                    <p>Xin chào <b><?php echo $_SESSION['user']; ?></b></p>
                    <form method="POST">
                        <button type="submit" name="logout" class="btn btn-danger">Đăng xuất</button>
                    </form>
                <?php endif; ?>
            </div>

            
            
        </div>

    </div>

</body>

</html>