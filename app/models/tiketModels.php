<?php
// app/models/User.php
require_once 'C:/laragon/www/PWEB2/tugas3_Kel1/config/database.php';

class ticketModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllTickets() {
        $query = $this->db->prepare("SELECT * FROM tickets");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_tiket) {
        $query = $this->db->prepare("SELECT * FROM tickets WHERE id_tiket = :id");
        $query->bindParam(':id', $id_tiket, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($id, $jenis, $harga, $kuota, $id_events) {
        $query = $this->db->prepare("INSERT INTO tickets (id_tiket, jenis_tiket, harga, kuota, id_events) VALUES (:id_tiket, :jenis_tiket, :harga, :kuota, :id_events)");
        $query->bindParam(':id_tiket', $id);
        $query->bindParam(':jenis_tiket', $jenis);
        $query->bindParam(':harga', $harga);
        $query->bindParam(':kuota', $kuota);
        $query->bindParam(':id_events', $id_events);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE tickets SET jenis_tiket = :jenis_tiket, harga = :harga, kuota = :kuota, id_events = :id_events WHERE id_tiket = :id_tiket";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_tiket', $id, PDO::PARAM_INT);
        $stmt->bindParam(':jenis_tiket', $data['jenis_tiket']);
        $stmt->bindParam(':harga', $data['harga']);
        $stmt->bindParam(':kuota', $data['kuota']);
        $stmt->bindParam(':id_events', $data['id_events']);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id_tiket) {
        $query = "DELETE FROM tickets WHERE id_tiket = :id_tiket";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_tiket', $id_tiket);
        return $stmt->execute();
    }
}
?>