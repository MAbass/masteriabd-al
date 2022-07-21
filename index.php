<?php
require_once 'controller/Controller.php';

$controller = new Controller();
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($_GET['categorie'])) {
    $controller->showIndex($_GET['categorie']);
}

$controller->showIndex(null);

?>