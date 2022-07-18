<?php
	require_once 'modele/Article.php';
	require_once 'modele/Categorie.php';
	require_once 'modele/ConnexionManager.php';

	/**
	 * Classe représentant notre controleur principal
	 */
	class Controller
	{
		
		function __construct()
		{
			
		}

		public function showIndex()
		{
			$articles = Article::getList();
			$categories = Categorie::getList();
			$data = Article::getListByJoin();

			require_once './vue/index.php';
		}
	}
?>