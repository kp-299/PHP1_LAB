<?php

require_once __DIR__ . '/database.php';

try {
    $db = DB::getInstance();

    echo 'Đã kết nối database thành công!<br>';

    $result = $db->query('SELECT DATABASE() AS db')->fetch();

    echo 'Database: ' . $result['db'];
} catch (PDOException $e) {
    echo 'Lỗi DB: ' . $e->getMessage();
}
