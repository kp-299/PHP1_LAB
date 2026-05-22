<?php
// bai 3 session
session_start();

// Xóa sạch tất cả các biến trong session
session_unset();

// Hủy bỏ phiên làm việc (session)
session_destroy();

// Điều hướng người dùng quay trở lại trang đăng nhập
header('Location: login.php');
exit();
