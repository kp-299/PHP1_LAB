<h2>Tìm kiếm sản phẩm (Live Search với jQuery)</h2>
<input type="text" id="search-input" placeholder="Nhập tên sản phẩm để tìm..." style="padding: 10px; width: 100%; max-width: 400px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá tiền</th>
            <th>Số lượng kho</th>
        </tr>
    </thead>
    <tbody id="result-table">
        <?php foreach ($products as $prod): ?>
        <tr>
            <td><?= $prod['id'] ?></td>
            <td><?= htmlspecialchars($prod['name']) ?></td>
            <td><?= number_format($prod['price']) ?> đ</td>
            <td><?= $prod['stock'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
$(document).ready(function() {
    $('#search-input').on('keyup', function() {
        var keyword = $(this).val();
        $.ajax({
            url: 'index.php',
            type: 'GET',
            data: { action: 'search_ajax', keyword: keyword },
            dataType: 'json',
            success: function(data) {
                var html = '';
                if(data.length > 0) {
                    $.each(data, function(index, prod) {
                        html += '<tr>';
                        html += '<td>' + prod.id + '</td>';
                        html += '<td>' + prod.name + '</td>';
                        html += '<td>' + Number(prod.price).toLocaleString('vi-VN') + ' đ</td>';
                        html += '<td>' + prod.stock + '</td>';
                        html += '</tr>';
                    });
                } else {
                    html = '<tr><td colspan="4" style="text-align:center; color: red;">Không tìm thấy sản phẩm phù hợp</td></tr>';
                }
                $('#result-table').html(html);
            }
        });
    });
});
</script>