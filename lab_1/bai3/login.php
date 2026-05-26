<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'password') {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    echo 'Invalid username or password.';
}

