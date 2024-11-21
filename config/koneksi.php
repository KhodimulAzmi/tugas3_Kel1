<?php

class Database {

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "2D_klp1";
    private $conn;

    public function connect() {
        $this->conn = null;
        try {
            // Perbaikan: Menggunakan "dbname" alih-alih "username" di string DSN
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}
