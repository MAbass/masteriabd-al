<?php
	/**
	 * Classe dao représentant un article
	 */
	class ArticleDAO
	{
        private $bdd;

        public function __construct(){
            $this->bdd = ConnexionManager::getInstance();
        }
        public function getList()
		{
			$data = $this->bdd->query('SELECT * FROM Article');
			$articles = $data->fetchAll(PDO::FETCH_CLASS, 'Article');
			$data->closeCursor();
			return $articles;
		}

        public function getById($id)
		{
			$data = $this->bdd->query('SELECT * FROM Article WHERE id = '.$id);
			$article = $data->fetch(PDO::FETCH_OBJ);
			$data->closeCursor();
			return $article; 
		}

		public function getByCategoryId($id)
		{
			$data = $this->bdd->query('SELECT * FROM Article WHERE categorie = '.$id);
			$articles = $data->fetchAll(PDO::FETCH_CLASS, 'Article');
			$data->closeCursor();
			return $articles;
		}
	}
?>