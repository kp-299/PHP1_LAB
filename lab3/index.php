<?php

$area = $_GET['area'] ?? 'client';
$page = $_GET['page'] ?? 'home';

if ($area === 'admin') {
    require_once './controllers/AdminController.php';

    $controller = new AdminController();

    if ($page === 'dashboard') {
        $controller->dashboard();
    } else {
        echo "Trang admin không tồn tại";
    }

} else {
    require_once './controllers/ClientController.php';

    $controller = new ClientController();

    if ($page === 'home') {
        $controller->home();
    } elseif ($page === 'product') {
        $controller->product();
    } else {
        echo "Trang client không tồn tại";
    }
}