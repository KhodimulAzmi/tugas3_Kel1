<?php
require_once 'app/controllers/UserController.php';

// Routing


// Ambil controller dan action dari parameter GET
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'events';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Ambil parameter lain (misalnya, dari POST atau GET)
$params = $_REQUEST; // Bisa $_GET atau $_POST tergantung kebutuhan

switch ($controller) {
    case 'events':
        $eventsController = new EventsController();
        switch ($action) {
            case 'create':
                if (isset($params['nama_acara'], $params['deskripsi'], $params['tanggal'], $params['lokasi'], $params['id_org'])) {
                    $eventsController->create($params['nama_acara'], $params['deskripsi'], $params['tanggal'], $params['lokasi'], $params['id_org']);
                } else {
                    echo "Input tidak lengkap untuk menambahkan event.";
                }
                break;
            case 'update':
                if (isset($params['id_events'], $params['nama_acara'], $params['deskripsi'], $params['tanggal'], $params['lokasi'], $params['id_org'])) {
                    $eventsController->update($params['id_events'], $params['nama_acara'], $params['deskripsi'], $params['tanggal'], $params['lokasi'], $params['id_org']);
                } else {
                    echo "Input tidak lengkap untuk memperbarui event.";
                }
                break;
            case 'delete':
                if (isset($params['id_events'])) {
                    $eventsController->delete($params['id_events']);
                } else {
                    echo "Event tidak ditemukan.";
                }
                break;
            default:
                $eventsController->index();
        }
        break;

    case 'organizers':
        $organizersController = new OrganizersController();
        switch ($action) {
            case 'create':
                if (isset($params['nama'], $params['kontak'], $params['email'], $params['jabatan'])) {
                    $organizersController->create($params['nama'], $params['kontak'], $params['email'], $params['jabatan']);
                } else {
                    echo "Input tidak lengkap untuk membuat organizer.";
                }
                break;
            case 'update':
                if (isset($params['id_org'], $params['nama'], $params['kontak'], $params['email'], $params['jabatan'])) {
                    $organizersController->update($params['id_org'], $params['nama'], $params['kontak'], $params['email'], $params['jabatan']);
                } else {
                    echo "Input tidak lengkap untuk memperbarui organizer.";
                }
                break;
            case 'delete':
                if (isset($params['id_org'])) {
                    $organizersController->delete($params['id_org']);
                } else {
                    echo "Organizer tidak ditemukan.";
                }
                break;
            default:
                $organizersController->index();
        }
        break;

    case 'attendees':
        $attendeesControle = new AttendeesController();
        switch ($action) {
            case 'create':
                if (isset($params['nama'], $params['email'], $params['no_telp'], $params['id_tiket'])) {
                    $attendeesController->create($params['nama'], $params['email'], $params['no_telp'], $params['id_tiket']);
                } else {
                    echo "Input tidak lengkap untuk mendaftarkan attendeer.";
                }
                break;
            case 'update':
                if (isset($params['id_att'], $params['nama'], $params['email'], $params['no_telp'], $params['id_tiket'])) {
                    $attendeesController->update($params['id_att'], $params['nama'], $params['email'], $params['no_telp'], $params['id_tiket']);
                } else {
                    echo "Input tidak lengkap untuk memperbarui attendeer.";
                }
                break;
            case 'delete':
                if (isset($params['id_att'])) {
                    $attendeesController->delete($params['id_att']);
                } else {
                    echo "Attendeer tidak ditemukan.";
                }
                break;
            default:
                $attendeesController->index();
        }
        break;
    case 'tickets':
        $ticketsControle = new TicketsController();
        switch ($action) {
            case 'create':
                if (isset($params['jenis_tiket'], $params['harga'], $params['kuota'], $params['id_events'])) {
                    $ticketsController->create($params['jenis_tiket'], $params['harga'], $params['kuota'], $params['id_events']);
                } else {
                    echo "Input tidak lengkap untuk menambahkan tiket.";
                }
                break;
            case 'update':
                if (isset($params['id_tiket'], $params['jenis_tiket'], $params['harga'], $params['kuota'], $params['id_events'])) {
                    $ticketsController->update($params['id_tiket'], $params['jenis_tiket'], $params['harga'], $params['kuota'], $params['id_events']);
                } else {
                    echo "Input tidak lengkap untuk memperbarui tiket.";
                }
                break;
            case 'delete':
                if (isset($params['id_att'])) {
                    $ticketsController->delete($params['id_tiket']);
                } else {
                    echo "Tiket tidak ditemukan.";
                }
                break;
            default:
                $ticketsController->index();
        }
        break;
    default:
        echo "Controller tidak ditemukan!";
        exit;
}
