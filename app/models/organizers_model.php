<?php

require_once '../config/database.php';

class OrganizersModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllOrganizers() {
        $query = $this->db->query("SELECT * FROM organizers");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_org) {
        $query = $this->db->prepare("SELECT * FROM organizers WHERE id_org = :id_org");
        $query->bindParam(':id_org', $id_org, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($name,$kontak, $email, $jabatan) {
        $query = $this->db->prepare("INSERT INTO organizers (nama ,kontak, email, jabatan) VALUES (:nama, :email, :kontak, :jabatan)");
        $query->bindParam(':nama', $name);
        $query->bindParam(':kontak', $kontak);
        $query->bindParam(':email', $email);
        $query->bindParam(':jabatan', $jabatan);
        return $query->execute();
    }

    // Update organizers data by ID
    public function update($id_org, $data) {
        $query = "UPDATE organizers SET nama = :nama, email = :email, kontak = :kontak, jabatan = :jabatan WHERE id_org = :id_org";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':kontak', $data['kontak']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':jabatan', $data['jabatan']);
        $stmt->bindParam(':id_org', $id_org);
        return $stmt->execute();
    }

    // Delete organizers by ID
    public function delete($id_org) {
        $query = "DELETE FROM organizers WHERE id_org = :id_org";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_org', $id_org);
        return $stmt->execute();
    }
}
