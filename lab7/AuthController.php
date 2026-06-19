<?php
require_once 'UserModel.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login() {
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $remember = isset($_POST['remember']); 

            $user = $this->userModel->getUserByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                if ($remember) {
                    setcookie('remember_username', $username, time() + (3600 * 24 * 7));
                    setcookie('remember_password', $password, time() + (3600 * 24 * 7)); 
                } else {
                    setcookie('remember_username', '', time() - 3600);
                    setcookie('remember_password', '', time() - 3600);
                }

                header('Location: index.php?action=dashboard');
                exit;
            } else {
                $error = 'Tài khoản hoặc mật khẩu không chính xác!';
            }
        }
        include 'views/login.php';
    }

    public function register() {
        $error = '';
        $success = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if (empty($username) || empty($email) || empty($password)) {
                $error = 'Vui lòng điền đầy đủ thông tin!';
            } else {
                if ($this->userModel->register($username, $email, $password)) {
                    $success = 'Đăng ký thành công! Đang chuyển hướng sang đăng nhập...';
                    header("refresh:2;url=index.php?action=login");
                } else {
                    $error = 'Có lỗi xảy ra, vui lòng thử lại!';
                }
            }
        }
        include 'views/register.php';
    }

    public function dashboard() {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?action=login');
            exit;
        }
        include 'views/dashboard.php';
    }

    public function logout() {
        unset($_SESSION['user']);
        header('Location: index.php?action=login');
        exit;
    }
}