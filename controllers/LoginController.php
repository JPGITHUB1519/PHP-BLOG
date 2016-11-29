<?php
	require 'baseController.php';
	if($_SERVER['REQUEST_METHOD'] === 'GET')
	{
		echo $twig->render("login.html");
	}
?>