<?php
	require_once 'controleur/Controller.php';

	$controller = new Controller();

	if (!isset($_GET['action']))
	{
		$controller->showIndex();
	}
?>