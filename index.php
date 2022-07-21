<?php
require_once 'controleur/Controller.php';

$controller = new Controller();
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/index.php' == $uri) {
    if (isset($_GET['categorie'])) {

        var_dump($_GET['categorie']);
        print_r($_GET['categorie']);
        $controller->showIndex($_GET['categorie']);
    }
    $controller->showIndex(null);
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}

?>