<?php
	require '../vendor/autoload.php';
	$loader = new Twig_Loader_FileSystem('../views');
	$twig = new Twig_Environment($loader);
?>