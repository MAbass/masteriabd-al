<?php
require_once 'model/domaine/Article.php';
require_once 'model/domaine/Categorie.php';
require_once 'model/ConnexionManager.php';
require_once 'model/dao/ArticleDAO.php';
require_once 'model/dao/CategorieDAO.php';


class Controller
{

    private $articleDAO;
    private $categorieDAO;

    function __construct()
    {
        $this->categorieDAO = new CategorieDAO();
        $this->articleDAO = new ArticleDAO();

    }

    public function showIndex($type, $id)
    {
        $categories = $this->categorieDAO->getList();

        switch ($type) {
            case 'categorie':
                $articles = $this->articleDAO->getByCategoryId($id);
                require_once 'vue/index.php';
                break;

            case 'article':
                $article = $this->categorieDAO->getById($id);
                require_once 'vue/index.php';
                break;
            
            default:
                # code...
                break;
        }
        $articles = $this->articleDAO->getList();
        require_once 'vue/index.php';
    }
}

?>