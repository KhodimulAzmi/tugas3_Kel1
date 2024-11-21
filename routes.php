<?php

// routes.php

require_once 'app/controllers/organizers_controller.php';

$organizers = new OrganizersController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($controller) {
    case 'events':
        $eventsController = new EventsController();

        break;

    case 'organizers':
        $organizersController = new OrganizersController();
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
        $attendeesControle = new AttendeesController();

        break;
    case 'tickets':
        $ticketsControle = new TicketsController();

        break;
    default:
        echo "Controller tidak ditemukan!";
        exit;
}
