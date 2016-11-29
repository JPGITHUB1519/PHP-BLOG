<?php
	require 'baseController.php';

	echo $twig->render("main.html", array(
		"name"=>"jean"));
?>