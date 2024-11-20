<?php 
class Database{

    private $host = "160.19.166.42";
    private $username = "2D_klp1";    
    private $password = "QCA5RkQG0oMSe*XW";
    private $dbname = "2D_klp1";
    private $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo "Koneksi Gagal : ".$e->getMessage();
        }
        return $this->conn;
    }
}