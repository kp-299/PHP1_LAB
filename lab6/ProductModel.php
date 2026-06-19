<?php
require_once 'db.php';

class ProductModel {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance();
    }

    public function searchProducts($keyword) {
        $sql = "SELECT id, name, price, stock FROM products WHERE name LIKE :keyword";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':keyword', '%' . $keyword . '%');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getPaginatedProducts($offset, $limit) {
        $sql = "SELECT id, name, price, stock FROM products LIMIT :offset, :limit";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getTotalProductsCount() {
        $sql = "SELECT COUNT(*) AS total FROM products";
        $stmt = $this->db->query($sql);
        $row = $stmt->fetch();
        return $row['total'];
    }
}