<?php
require_once 'model/domaine/Article.php';
require_once 'model/domaine/Categorie.php';
require_once 'model/dao/ArticleDAO.php';
require_once 'model/dao/CategorieDAO.php';


class IndexController
{
    private $articleDAO;
    private $categorieDAO;

    function __construct()
    {
        $this->categorieDAO = new CategorieDAO();
        $this->articleDAO = new ArticleDAO();

    }


    public function showIndex()
    {
        $categories = $this->categorieDAO->getList();
        $articles = $this->articleDAO->getList();
        require_once 'vue/homepage.php';
    }
}

?>