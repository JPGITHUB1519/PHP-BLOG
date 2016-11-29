<?php
	require 'baseController.php';
	require '../models/postModel.php';
	if ($_SERVER['REQUEST_METHOD'] === 'GET') 
	{
		$lista_post = Post::getTop10();
		echo $twig->render("main.html", array(
		"lista_post"=>$lista_post));
	}
	
?>