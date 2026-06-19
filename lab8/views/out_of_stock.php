<h2>Sản phẩm hết hàng (Số lượng bằng 0)</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá tiền</th>
        <th>Số lượng kho</th>
        <th>Trạng thái</th>
    </tr>
    <?php foreach ($products as $prod): ?>
    <tr>
        <td><?= $prod['id'] ?></td>
        <td><?= htmlspecialchars($prod['name']) ?></td>
        <td><?= number_format($prod['price']) ?> đ</td>
        <td><?= $prod['stock'] ?></td>
        <td><?= htmlspecialchars($prod['status']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>