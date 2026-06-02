<?php
// Không dùng class → dùng function

// function home() {
//     include "views/header.php";
//     include "views/home.php";
//     include "views/footer.php";
// }

// function product() {
//     include "model/product.php"; // lấy dữ liệu

//     include "views/header.php";
//     include "views/product.php";
//     include "views/footer.php";
// }



class Controller {

    // Trang chủ
    public function home() {
        include "Views/header.php";
        include "Views/home.php";
        include "Views/footer.php";
    }

    // Trang sản phẩm
    public function product() {
        include "Model/product.php"; // lấy data

        include "Views/header.php";
        include "Views/product.php";
        include "Views/footer.php";
    }

}