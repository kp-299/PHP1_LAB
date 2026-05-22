<?php
$name = "";
$description = "";
$price = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    if ($name == "" || $description == "" || $price == "") {
        $message = "Vui lòng nhập đầy đủ thông tin.";
    } else {
        $message = "Thêm sản phẩm thành công.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Bài 2 - Form sản phẩm</title>
</head>

<body>
    <h2>Form nhập sản phẩm</h2>

    <form method="post">
        <p>
            Tên sản phẩm:<br>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </p>

        <p>
            Mô tả:<br>
            <textarea name="description" rows="4" cols="40"><?php echo $description; ?></textarea>
        </p>

        <p>
            Giá:<br>
            <input type="number" name="price" value="<?php echo $price; ?>">
        </p>

        <button type="submit">Gửi</button>
    </form>

    <p><?php echo $message; ?></p>

    <?php if ($message == "Thêm sản phẩm thành công.") { ?>
        <h3>Thông tin sản phẩm</h3>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Giá</th>
            </tr>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $description; ?></td>
                <td><?php echo number_format($price); ?> đ</td>
            </tr>
        </table>
    <?php } ?>
</body>

</html>
