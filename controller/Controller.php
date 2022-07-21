<?php
require_once '../modele/Article.php';
require_once '../modele/Categorie.php';
require_once '../modele/ConnexionManager.php';

class Controller
{

    function __construct()
    {

    }

    public function showIndex($categorieId)
    {
        ini_set("display_errors",1);
        error_reporting(E_ALL);
        echo "Here for debug";
        echo "Here for debug";
        echo "Here for debug";
        echo "Here for debug";
        echo "Here for debug";
        if ($categorieId == null) {
            $articles = Article::getList();
        } else {
            $articles = Article::getByCategoryId($categorieId);
        }
        require_once './vue/index.php';
    }
}

?>