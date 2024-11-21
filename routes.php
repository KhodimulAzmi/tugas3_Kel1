<?php

// routes.php

require_once 'app/controllers/organizers_controller.php';
require_once 'app/controllers/PesertaController.php';
require_once 'app/controllers/tiketcontroller.php';



$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($controller) {
    case 'events':
        $eventsController = new EventsController();

        break;

    case 'organizers':
        $controller = new OrganizersController();
        if ($url == '/organizers/index' || $url == '/') {
            $controller->index();
        } elseif ($url == '/organizers/create' && $requestMethod == 'GET') {
            $controller->create();
        } elseif ($url == '/organizers/store' && $requestMethod == 'POST') {
            $controller->store();
        } elseif (preg_match('/\/organizers\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $organizersId = $matches[1];
            $controller->edit($organizersId);
        } elseif (preg_match('/\/organizers\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
            $organizersId = $matches[1];
            $controller->update($organizersId, $_POST);
        } elseif (preg_match('/\/organizers\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $organizersId = $matches[1];
            $controller->delete($organizersId);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
        break;

    case 'attendees':
        $controller = new AttendeesController();
        if ($url == '/peserta/index' || $url == '/') {
            $controller->index();
        } elseif ($url == '/peserta/create' && $requestMethod == 'GET') {
            $controller->create();
        } elseif ($url == '/peserta/store' && $requestMethod == 'POST') {
            $controller->store();
        } elseif (preg_match('/\/peserta\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $userId = $matches[1];
            $controller->edit($userId);
        } elseif (preg_match('/\/peserta\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
            $userId = $matches[1];
            $controller->update($userId, $_POST);
        } elseif (preg_match('/\/peserta\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $userId = $matches[1];
            $controller->delete($userId);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }

        break;
    case 'tickets':
        $controller = new TicketController();
        if ($url == 'tiket/index') {
            $controller->index();
        } elseif ($url == 'tiket/create') {
            $controller->create();
        } elseif ($url == 'tiket/store') {
            $controller->store();
        } elseif (preg_match('/^tiket\/edit\/(\d+)$/', $url, $matches)) {
            $id_tiket = $matches[1];
            $controller->edit($id_tiket);
        } elseif (preg_match('/^tiket\/update\/(\d+)$/', $url, $matches) && $requestMethod == 'POST') {
            $id_tiket = $matches[1];
            $controller->update($id_tiket, $_POST);
        } elseif (preg_match('/^tiket\/delete\/(\d+)$/', $url, $matches) && $requestMethod == 'GET') {
            $id_tiket = $matches[1];
            $controller->delete($id_tiket);
        } else {
            http_response_code(404);
            echo "<h1>404 Not Found</h1>";
        }
        break;
    default:
        echo "Controller tidak ditemukan!";
        exit;
}
