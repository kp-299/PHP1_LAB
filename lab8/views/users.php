<h2>Danh sách người dùng</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Tên tài khoản</th>
        <th>Email</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= htmlspecialchars($user['username']) ?></td>
        <td><?= htmlspecialchars($user['email']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>