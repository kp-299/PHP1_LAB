<?php

class AdminController
{
    public function dashboard()
    {
        require_once './views/header.php';
        require_once './views/admin.php';
        require_once './views/footer.php';
    }
}