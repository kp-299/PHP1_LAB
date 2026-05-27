<?php

class ClientController
{
    public function home()
    {
        require_once './views/header.php';
        require_once './views/home.php';
        require_once './views/footer.php';
    }

    public function product()
    {
        require_once './views/header.php';
        require_once './views/product.php';
        require_once './views/footer.php';
    }
}