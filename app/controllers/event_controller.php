<?php
// app/controllers/EventController.php
require_once '../app/models/events_model.php';
require_once '../app/models/organizers_model.php';

class EventController {
    private $EventsModel;
    private $organizersModel;

    public function __construct() {
        $this->EventsModel = new EventsModel();
        $this->organizersModel = new OrganizersModel();

    }

    // Menampilkan daftar event
    public function index() {
        $EventController = $this->EventsModel->getAllEvents(); 
        // Mengambil semua data acara
        require_once '../app/views/event/index.php';
    }

    // Menampilkan form untuk menambah acara baru
    public function create() {
        $org = $this->organizersModel->getAllOrganizers();
        require_once '../app/views/event/create.php';
    }

    // Menyimpan acara baru ke database
    public function store() {
        // Mengambil data dari form
        $nama_acara = $_POST['nama_acara'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        $lokasi = $_POST['lokasi'];
        $id_org = $_POST['id_org'];

        // Memasukkan data ke model untuk disimpan ke database
        $this->EventsModel->add($nama_acara, $deskripsi, $tanggal, $waktu, $lokasi, $id_org);

        // Redirect ke halaman daftar acara
        header('Location: /event/index');
    }

    // Menampilkan form edit acara dengan data yang sudah ada
    public function edit($id_events) {
        // Mengambil data acara berdasarkan ID
        $event = $this->EventsModel->find($id_events); 
        $org = $this->organizersModel->getAllOrganizers();
    
        // Mengirimkan data ke view
        require_once __DIR__ . '/../views/event/edit.php';
    }
    
    // Memproses pembaruan data acara
    public function update($id_events, $data) {

        // Mengirim data ke model untuk diperbarui di database
        $updated = $this->EventsModel->update($id_events, $data);

        // Redirect jika berhasil, atau tampilkan pesan error
        if ($updated) {
            header("Location: /event/index"); // Redirect ke daftar acara
        } else {
            echo "Failed to update event.";
        }
    }

    // Memproses penghapusan acara
    public function delete($id_events) {
        // Menghapus acara berdasarkan ID
        $deleted = $this->EventsModel->delete($id_events);

        // Redirect jika berhasil, atau tampilkan pesan error
        if ($deleted) {
            header("Location: /event/index"); // Redirect ke daftar acara
        } else {
            echo "Failed to delete event.";
        }
    }
}
