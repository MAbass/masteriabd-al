<?php
require_once 'controller/Controller.php';

$controller = new Controller();

if (isset($_GET['action']) && isset($_GET['id'])) {
    $controller->showIndex($_GET['action'], $_GET['id']);
}

$controller->showIndex(null, null);

?>