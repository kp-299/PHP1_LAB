<?php
session_start();
require_once 'AuthController.php';

$authController = new AuthController();

$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'login':
        $authController->login(); 
        break;
    case 'register':
        $authController->register(); 
        break;
    case 'dashboard':
        $authController->dashboard();
        break;
    case 'logout':
        $authController->logout();
        break;
    default:
        $authController->login();
        break;
}