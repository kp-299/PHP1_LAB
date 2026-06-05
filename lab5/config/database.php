<?php

define('DB_HOST', '103.57.223.36');
define('DB_NAME', 'bcalhqzjhosting_ban_trai_cay');
define('DB_USER', 'bcalhqzjhosting_ban_trai_cay');
define('DB_PASS', '|2zf_sDWwN_dW.C');

class Database {
    private static $conn = null;

    public static function connect() {
        if (self::$conn === null) {
            self::$conn = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
                DB_USER,
                DB_PASS
            );

            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$conn;
    }
}