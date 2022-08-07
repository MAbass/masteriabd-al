<?php

class ArticleController
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
        $article = $this->articleDAO->getById($id);
        require_once 'vue/homepage.php';
    }

}