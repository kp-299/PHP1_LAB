<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 - Quản lý sản phẩm</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; line-height: 1.6; background-color: #f9f9f9; }
        nav { background: #2980b9; padding: 15px; margin-bottom: 25px; border-radius: 4px; }
        nav a { color: #fff; margin-right: 20px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; color: #f1c40f; }
        main { background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f4f4f4; color: #333; }
        tr:nth-child(even) { background-color: #fcfcfc; }
        .pagination { margin-top: 25px; display: flex; gap: 5px; }
        .pagination a { color: #333; padding: 8px 16px; text-decoration: none; border: 1px solid #ddd; border-radius: 4px; background: #fff; }
        .pagination a.active { background-color: #2980b9; color: white; border: 1px solid #2980b9; }
        .pagination a:hover:not(.active) { background-color: #ddd; }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <nav>
        <a href="index.php?action=search">Bài 1: Tìm kiếm sản phẩm</a>
        <a href="index.php?action=paginate">Bài 2: Phân trang sản phẩm</a>
    </nav>

    <main>
        <?php require_once $view; ?>
    </main>

</body>
</html>