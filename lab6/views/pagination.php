<h2>Phân trang sản phẩm</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá tiền</th>
        <th>Số lượng kho</th>
    </tr>
    <?php foreach ($products as $prod): ?>
    <tr>
        <td><?= $prod['id'] ?></td>
        <td><?= htmlspecialchars($prod['name']) ?></td>
        <td><?= number_format($prod['price']) ?> đ</td>
        <td><?= $prod['stock'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="index.php?action=paginate&page=<?= $i ?>" class="<?= $i == $page ? 'active' : '' ?>"><?= $i ?></a>
    <?php endfor; ?>
</div>