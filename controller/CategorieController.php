<?php
require_once 'model/ConnexionManager.php';
require_once 'model/dao/ArticleDAO.php';
require_once 'model/dao/CategorieDAO.php';

class CategorieController
{
    private $articleDAO;
    private $categorieDAO;

    function __construct()
    {
        $this->categorieDAO = new CategorieDAO();
        $this->articleDAO = new ArticleDAO();

    }

    public function getById($id)
    {
        $categories = $this->categorieDAO->getList();
        $articles = $this->articleDAO->getByCategoryId($id);
        require_once 'vue/homepage.php';
    }

}
