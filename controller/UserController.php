<?php
require_once 'model/dao/UserDAO.php';

class UserController
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function showUsers()
    {
        $users = $this->userDAO->getAll();
        require_once 'vue/user.php';
    }

    public function addNewUser($firstname, $lastname, $username, $password)
    {
        $user = $this->userDAO->addNewUser($firstname, $lastname, $username, $password);
        $users = $this->userDAO->getAll();
        require_once 'vue/user.php';
    }

    public function deleteUser($id)
    {
        $user = $this->userDAO->deleteByUserId($id);
        $users = $this->userDAO->getAll();
        header("Location: /user");
    }
}