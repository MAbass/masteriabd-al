<?php
require_once 'model/domaine/User.php';

class UserDAO
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = ConnexionManager::getInstance();
    }

    public function getUserByUsername($username)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM User WHERE username = ?");
        $stmt->execute([$username]);
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        $stmt->closeCursor();
        return $data[0];
    }

    public function deleteByUserId($id)
    {
        $stmt = $this->bdd->query("DELETE FROM User WHERE id = " . $id);
        $result = $stmt->execute();
        $stmt->closeCursor();
        return $result;
    }

    public function getAll()
    {
        $reponse = $this->bdd->query('SELECT * FROM User');
        $data = $reponse->fetchAll(PDO::FETCH_CLASS, 'User');
        $reponse->closeCursor();
        return $data;
    }

    public function addNewUser($firstname, $lastname, $username, $password)
    {
        $sql = 'INSERT INTO User(firstname, lastname, username, password) VALUES(:firstname, :lastname, :username, :password)';
        $stmt = $this->bdd->prepare($sql);
        $query_execute = $stmt->execute([
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':username' => $username,
            ':password' => $password
        ]);
        $stmt->closeCursor();
        if ($query_execute) {
            return true;
        } else {
            return false;
        }
    }
}
