<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 8 - Hệ thống thống kê cửa hàng</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; line-height: 1.6; background-color: #f9f9f9; }
        nav { background: #2c3e50; padding: 15px; margin-bottom: 25px; border-radius: 4px; }
        nav a { color: #fff; margin-right: 20px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; color: #1abc9c; }
        main { background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f4f4f4; color: #333; }
        tr:nth-child(even) { background-color: #fcfcfc; }
    </style>
</head>
<body>

    <nav>
        <a href="index.php?action=categories">Bài 1: Danh mục sản phẩm</a>
        <a href="index.php?action=users">Bài 2: Danh sách người dùng</a>
        <a href="index.php?action=out_of_stock">Bài 3: Sản phẩm hết hàng</a>
        <a href="index.php?action=best_selling">Bài 4: Sản phẩm bán chạy</a>
    </nav>

    <main>
        <?php require_once $view; ?>
    </main>

</body>
</html>