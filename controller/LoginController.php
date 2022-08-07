<?php
require_once 'model/dao/UserDAO.php';

class LoginController
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function showLoginPage()
    {
        require_once 'vue/login.php';
    }

    public function tryToConnect($username, $password)
    {
        $user = $username;
        $pass = $password;
        $error = null;
        if ($username == '' || $password == '') {
            $error = "Le mot de passe ou le nom d'utilisateur ne doit pas etre null";
        } else {
            $userFound = $this->userDAO->getUserByUsername($username);
            if ($userFound !== null && ($userFound->password != $password)) {
                $error = "Vous n'etes pas autorisé";
            }
        }
        if ($error == null) {
            header("Location: /user");
        } else {
            require_once 'vue/login.php';
        }

    }
}