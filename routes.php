<?php

// routes.php

require_once 'app/controllers/event_controller.php';
require_once 'app/controllers/organizers_controller.php';
require_once 'app/controllers/PesertaController.php';
require_once 'app/controllers/tiketcontroller.php';
require_once 'app/controllers/home_controller.php';

$events = new EventController();
$organizers = new OrganizersController();
$peserta = new AttendeesController();
$tickets = new TicketController();
$home = new HomeController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];


        if ($url == '/'){
            $home->index();
        }elseif ($url == '/event/index') {
            $events->index();
        } elseif ($url == '/event/create' && $requestMethod == 'GET') {
            $events->create();
        } elseif ($url == '/event/store' && $requestMethod == 'POST') {
            $events->store();
        } elseif (preg_match('/\/event\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $eventsId = $matches[1];
            $events->edit($eventsId);
        } elseif (preg_match('/\/event\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
            $eventsId = $matches[1];
            $events->update($eventsId, $_POST);
        } elseif (preg_match('/\/event\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $eventsId = $matches[1];
            $events->delete($eventsId);
        } elseif ($url == '/organizers/index') {
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
        }elseif ($url == '/peserta/index') {
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
        }elseif ($url == '/tiket/index') {
            $tickets->index();
        } elseif ($url == '/tiket/create') {
            $tickets->create();
        } elseif ($url == '/tiket/store') {
            $tickets->store();
        } elseif (preg_match('/\/tiket\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $id_tiket = $matches[1];
            $tickets->edit($id_tiket);
        } elseif (preg_match('/\/tiket\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
            $id_tiket = $matches[1];
            $tickets->update($id_tiket, $_POST);
        } elseif (preg_match('/\/tiket\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
            $id_tiket = $matches[1];
            $tickets->delete($id_tiket);
        } else {
            http_response_code(404);
            echo "<h1>404 Not Found</h1>";
        }

