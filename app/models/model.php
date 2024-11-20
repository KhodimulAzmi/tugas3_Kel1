<?php
require_once('../models/model.php');


class MahasiswaModel
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }
    public function getAllMahasiswa()
    {
        $query = $this->db->query
        ("SELECT m.*, p.nama_program_studi AS program_studi FROM mahasiswa m 
        JOIN program_studi p ON m.id_program_studi = p.id_program_studi");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getMahasiswaById($id)
    {
        $query = $this->db->prepare("SELECT m.*, p.nama_program_studi AS program_studi FROM mahasiswa m 
              JOIN program_studi p ON m.id_program_studi = p.id_program_studi WHERE id_mahasiswa = ?");
        $query->bindParam("i", $id); // Mengikat parameter ID sebagai integer
        $query->execute(); // Menjalankan query
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result; // Mengembalikan data mahasiswa sesuai ID
    }
}

class ProgramStudiModel
{
    private $db;
    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function getAllProgramStudi()
    {
        $query = $this->db->query("SELECT * FROM program_studi");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
