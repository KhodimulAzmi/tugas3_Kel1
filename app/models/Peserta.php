<?php
// app/models/Peserta.php
require_once "../config/database.php";

class Peserta {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllPeserta() {
        $query = $this->db->query("SELECT * FROM attendees");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_att) {
        $query = $this->db->prepare("SELECT * FROM attendees WHERE id_att = :id_att");
        $query->bindParam(':id_att', $id_att, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama, $email, $no_tlp, $id_tiket) {
        $query = $this->db->prepare("INSERT INTO attendees (nama, email, no_tlp, id_tiket) VALUES (:nama, :email, :no_tlp, :id_tiket)");
        $query->bindParam(':nama', $nama);
        $query->bindParam(':email', $email);
        $query->bindParam(':no_tlp', $no_tlp);
        $query->bindParam(':id_tiket', $id_tiket);
        return $query->execute();
    }
    
    public function update($id_att, $data) {
        $query = "UPDATE attendees SET nama = :nama, email = :email, no_tlp = :no_tlp, id_tiket = :id_tiket WHERE id_att = :id_att";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':no_tlp', $data['no_tlp']);
        $stmt->bindParam(':id_tiket', $data['id_tiket']);
        $stmt->bindParam(':id_att', $id_att);
        return $stmt->execute();
    }

    public function delete($id_att) {
        $query = "DELETE FROM attendees WHERE id_att = :id_att";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_att', $id_att);
        return $stmt->execute();
    }

}