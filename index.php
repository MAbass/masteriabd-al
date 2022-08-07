<?php
// On génère une constante contenant le chemin vers la racine publique du projet
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
require_once(ROOT . 'controller/CategorieController.php');
require_once(ROOT . 'controller/ArticleController.php');
require_once(ROOT . 'controller/IndexController.php');
require_once(ROOT . 'controller/LoginController.php');
require_once(ROOT . 'controller/UserController.php');

$controller = new IndexController();

// Si au moins 1 paramètre existe
if (isset($_GET['action']) && $_GET['action'] != "") {
    // On sépare les paramètres et on les met dans le tableau $params
    $action = $_GET['action'];
    $categorieController = new CategorieController();
    $articleController = new ArticleController();
    $loginController = new LoginController();
    $userController = new UserController();

    // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
    if ($action == 'categorie' && isset($_GET['id'])) {
        $categorieController->getById($_GET['id']);
    }
    if ($action == 'article' && isset($_GET['id'])) {
        $articleController->getById($_GET['id']);
    }
    if ($action == 'login') {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $loginController->tryToConnect($_POST['username'], $_POST['password']);
        }
        $loginController->showLoginPage();
    }
    if ($action == 'user') {
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
            if (isset($_GET['id']) && $_GET['id'] != null) {
                $userController->modifyUser($_GET['id'], $_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['password']);
            } else {
                $userController->addNewUser($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['password']);
            }
        }

        if (isset($_GET['type']) && $_GET['type'] == 'delete') {
            $userController->deleteUser($_GET['id']);
        }
        if (isset($_GET['type']) && $_GET['type'] == 'update') {
            $userController->updateUser($_GET['id']);
        }
        $userController->showUsers();
    }
} else {
    $controller->showIndex();
}
