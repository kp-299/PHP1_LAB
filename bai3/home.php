<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}else {
    echo "Welcome, " . $_SESSION['username'] . "! <a href='logout.php'>Logout</a>";
}