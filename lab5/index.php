<?php
require_once "controller/controller.php";

$controller = new Controller();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'detail':
        $controller->detail();
        break;

    case 'category':
        $controller->category();
        break;

    default:
        $controller->index();
        break;
}
?>