<?php
require_once 'model/Article.php';
require_once 'model/Categorie.php';
require_once 'model/ConnexionManager.php';

class Controller
{

    function __construct()
    {

    }

    public function showIndex($categorieId)
    {
        if ($categorieId == null) {
            $articles = Article::getList();
        } else {
            $articles = Article::getByCategoryId($categorieId);
        }
        require_once 'vue/index.php';
    }
}

?>