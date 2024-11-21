<?php
// routes.php
require_once 'C:/laragon/www/PWEB2/Tugas3-ticket/app/controllers/tiketController.php';

$controller = new TicketController();
$requestMethod = $_SERVER['REQUEST_METHOD'];


$url = isset($_GET['url']) ? trim($_GET['url'], '/') : '';


if ($url == '/' || $url == 'home') {
    echo "misal dashboard";
} elseif ($url == 'tiket/index') {
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

?>
