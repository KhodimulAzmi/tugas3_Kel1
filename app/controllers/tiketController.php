<?php
// app/controllers/UserController.php

require_once '../app/models/tiketModels.php';

class TicketController {
    private $ticketModel;

    public function __construct() {
        $this->ticketModel = new ticketModel();
    }

    public function index() {
        $ticketData = $this->ticketModel->getAllTickets();
        require_once '../app/views/tiket/index.php';

    }

    public function create() {
        require_once '../app/views/tiket/create.php';
    }

    public function store() {
        $id = $_POST['id_tiket'];
        $jenis = $_POST['jenis_tiket'];
        $harga = $_POST['harga'];
        $kuota = $_POST['kuota'];
        $id_events = $_POST['id_events'];
        $this->ticketModel->add($id, $jenis, $harga, $kuota, $id_events);
        header('Location: /tugas3_Kel1/tiket/index');
    }
    // Show the edit form with the user data
    public function edit($id_tiket) {
        $tiket = $this->ticketModel->find($id_tiket); // Assume find() gets user by ID
        require_once '../app/views/tiket/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->ticketModel->update($id, $data);
        if ($updated) {
            header("Location: /Tugas3-ticket/tiket/index"); // Redirect to user list
        } else {
            echo "Failed to update ticket.";
        }
    }

    // Process delete request
    public function delete($id_tiket) {

        $deleted = $this->ticketModel->delete($id_tiket);
        if ($deleted) {
            header("Location: /tugas3_Kel1/tiket/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}
?>
