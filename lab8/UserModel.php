<?php
require_once 'db.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance();
    }

    public function getUsers() {
        $stmt = $this->db->query("SELECT id, username, email FROM users");
        return $stmt->fetchAll();
    }
}