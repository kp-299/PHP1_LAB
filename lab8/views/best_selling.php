<h2>Top 5 sản phẩm bán chạy nhất</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá gốc</th>
        <th>Tổng số lượng đã bán</th>
    </tr>
    <?php foreach ($products as $prod): ?>
    <tr>
        <td><?= $prod['id'] ?></td>
        <td><?= htmlspecialchars($prod['name']) ?></td>
        <td><?= number_format($prod['price']) ?> đ</td>
        <td><strong><?= $prod['total_sold'] ?></strong></td>
    </tr>
    <?php endforeach; ?>
</table>