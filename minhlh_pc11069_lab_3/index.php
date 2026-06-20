<?php

// include "Controller/Controller.php";

// // Lấy action
// $act = $_GET['act'] ?? '/';

// // Điều hướng
// switch ($act) {
//     case '/':
//         home();
//         break;

//     case 'product':
//         product();
//         break;

//     default:
//         echo "Trang không tồn tại";
// }



require_once "Controller/Controller.php";

$controller = new Controller();

// lấy action (mặc định là home)
$act = $_GET['act'] ?? 'home';

switch ($act) {
    case 'home':
        $controller->home();
        break;

    case 'product':
        $controller->product();
        break;

    default:
        echo "Trang không tồn tại";
}

