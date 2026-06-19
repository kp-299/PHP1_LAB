<h2>Danh mục sản phẩm</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Slug</th>
        <th>Trạng thái</th>
    </tr>
    <?php foreach ($categories as $cat): ?>
    <tr>
        <td><?= $cat['id'] ?></td>
        <td><?= htmlspecialchars($cat['name']) ?></td>
        <td><?= htmlspecialchars($cat['slug']) ?></td>
        <td><?= htmlspecialchars($cat['status']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>