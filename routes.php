<?php
// routes.php

require_once 'app/controller/PesertaController.php';

$controller = new AttendeesController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

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