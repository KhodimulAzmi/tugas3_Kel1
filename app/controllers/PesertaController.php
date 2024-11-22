<?php
require_once '../app/models/Peserta.php';
require_once '../app/models/tiketModels.php';

class AttendeesController
{
    private $pesertaModel;
    private $ticketModel;

    public function __construct()
    {
        $this->pesertaModel = new Peserta();
        $this->ticketModel = new TicketModel();
    }

    // Method untuk menampilkan halaman daftar peserta
    public function index()
    {
        $attendeesData = $this->pesertaModel->getAllPeserta();
        require_once '../app/views/peserta/index.php';
    }


    // Method untuk menampilkan form tambah peserta
    public function create()
    {
        $tiket = $this->ticketModel->getAllTickets();
        require_once '../app/views/peserta/create.php';
    }

    // Method untuk menyimpan data peserta baru
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'] ?? '';
            $email = $_POST['email'] ?? '';
            $no_tlp = $_POST['no_tlp'] ?? '';
            $id_tiket = $_POST['id_tiket'] ?? '';

            // Validasi data
            if (!empty($nama) && !empty($email) && !empty($no_tlp) && !empty($id_tiket)) {
                $this->pesertaModel->add($nama, $email, $no_tlp, $id_tiket);

                // Redirect ke halaman daftar peserta
                header('Location: /peserta/index');
                exit();
            } else {
                echo "Semua field harus diisi!";
            }
        }
    }
    // Show the edit form with the user data
    public function edit($id_att)
    {
        $tiket = $this->ticketModel->getAllTickets();
        $attendee = $this->pesertaModel->find($id_att); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/peserta/edit.php';
    }
    // Method untuk memperbarui data peserta
    public function update($id_att, $data) {
        $updated = $this->pesertaModel->update($id_att, $data);
        if ($updated) {
            header("Location: /peserta/index"); // Redirect to user list
        } else {
            echo "Failed to update peserta.";
        }
    }


    // Method untuk menghapus data peserta
    public function delete($id_att)
    {
        $deleted = $this->pesertaModel->delete($id_att);
        if ($deleted) {
            header('Location: /peserta/index');
            exit();
        } else {
            echo "Gagal menghapus data peserta.";
        }
    }
}
