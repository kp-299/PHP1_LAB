<?php
require_once 'db.php';

class ProductModel {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance();
    }

    public function getCategories() {
        $stmt = $this->db->query("SELECT id, name, slug, status FROM categories");
        return $stmt->fetchAll();
    }

    public function getOutOfStockProducts() {
        $stmt = $this->db->query("SELECT id, name, price, stock, status FROM products WHERE stock = 0 OR status = 'out_of_stock'");
        return $stmt->fetchAll();
    }

    public function getBestSellingProducts() {
        $stmt = $this->db->query("SELECT p.id, p.name, p.price, SUM(oi.quantity) AS total_sold 
                                  FROM products p 
                                  JOIN order_items oi ON p.id = oi.product_id 
                                  GROUP BY p.id 
                                  ORDER BY total_sold DESC 
                                  LIMIT 5");
        return $stmt->fetchAll();
    }
}