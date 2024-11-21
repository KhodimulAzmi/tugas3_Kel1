<?php

// routes.php

require_once 'app/controllers/organizers_controller.php';
require_once 'app/controllers/PesertaController.php';

$peserta = new AttendeesController();
$organizers = new OrganizersController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($controller) {
    case 'events':
        $eventsController = new EventsController();

        break;

    case 'organizers':
        if ($url == '/organizers/index' || $url == '/') {
            $organizers->index();
        } elseif ($url == '/organizers/create' && $requestMethod == 'GET') {
            $organizers->create();
        } elseif ($url == '/organizers/store' && $requestMethod == 'POST') {
            $organizers->store();
        } elseif (preg_match('/\/organizers\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $organizersId = $matches[1];
            $organizers->edit($organizersId);
        } elseif (preg_match('/\/organizers\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
            $organizersId = $matches[1];
            $organizers->update($organizersId, $_POST);
        } elseif (preg_match('/\/organizers\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $organizersId = $matches[1];
            $organizers->delete($organizersId);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
        break;

    case 'attendees':
        if ($url == '/peserta/index' || $url == '/') {
            $peserta->index();
        } elseif ($url == '/peserta/create' && $requestMethod == 'GET') {
            $peserta->create();
        } elseif ($url == '/peserta/store' && $requestMethod == 'POST') {
            $peserta->store();
        } elseif (preg_match('/\/peserta\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $userId = $matches[1];
            $peserta->edit($userId);
        } elseif (preg_match('/\/peserta\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
            $userId = $matches[1];
            $peserta->update($userId, $_POST);
        } elseif (preg_match('/\/peserta\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $userId = $matches[1];
            $peserta->delete($userId);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }

        break;
    case 'tickets':
        $ticketsControle = new TicketsController();

        break;
    default:
        echo "Controller tidak ditemukan!";
        exit;
}
