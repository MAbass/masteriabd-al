<?php
require_once 'controller/Controller.php';

$controller = new Controller();

if (isset($_GET['categorie'])) {
    $controller->showIndex($_GET['categorie']);
}

$controller->showIndex(null);

?>