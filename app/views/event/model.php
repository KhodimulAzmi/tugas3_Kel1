<?php
// app/models/EventsModel.php
require_once 'C:/laragon/www/TUGAS3_EVENTS/config/database.php';

class EventsModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllEvents() {
        $query = $this->db->query("SELECT * FROM events");
        $query->execute(); 
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_events) {
        $query = $this->db->prepare("SELECT * FROM events WHERE id_events = :id_events");
        $query->bindParam(':id_events', $id_events, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_acara, $deskripsi, $tanggal, $waktu, $lokasi, $id_org) {
        // Correcting the typo in the SQL query
        $query = $this->db->prepare("INSERT INTO events (nama_acara, deskripsi, tanggal, waktu, lokasi, id_org) VALUES (:nama_acara, :deskripsi, :tanggal, :waktu, :lokasi, :id_org)");
        $query->bindParam(':nama_acara', $nama_acara);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':tanggal', $tanggal);
        $query->bindParam(':waktu', $waktu);
        $query->bindParam(':lokasi', $lokasi);
        $query->bindParam(':id_org', $id_org);
        return $query->execute();
    }

    public function update($id_events, $data) {
        // Fixing the query to update the events table
        $query = "UPDATE events SET nama_acara = :nama_acara, deskripsi = :deskripsi, tanggal = :tanggal, waktu = :waktu, lokasi = :lokasi, id_org = :id_org WHERE id_events = :id_events";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_acara', $data['nama_acara']);
        $stmt->bindParam(':deskripsi', $data['deskripsi']);
        $stmt->bindParam(':tanggal', $data['tanggal']);
        $stmt->bindParam(':waktu', $data['waktu']);
        $stmt->bindParam(':lokasi', $data['lokasi']);
        $stmt->bindParam(':id_org', $data['id_org']);
        $stmt->bindParam(':id_events', $id_events, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id_events) {
        // Fixing the query to delete from the events table
        $query = "DELETE FROM events WHERE id_events = :id_events";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_events', $id_events, PDO::PARAM_INT);
        return $stmt->execute();
    }
}

