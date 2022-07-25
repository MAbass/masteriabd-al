<?php
require_once 'model/Article.php';
require_once 'model/Categorie.php';
require_once 'model/ConnexionManager.php';

class Controller
{

    function __construct()
    {

    }

    public function showIndex($type, $id)
    {
        $categories = Categorie::getList();

        switch ($type) {
            case 'categorie':
                $articles = Article::getByCategoryId($id);
                require_once 'vue/index.php';
                break;

            case 'article':
                $article = Article::getById($id);
                require_once 'vue/index.php';
                break;
            
            default:
                # code...
                break;
        }
        $articles = Article::getList();
        
        require_once 'vue/index.php';
    }
}

?>