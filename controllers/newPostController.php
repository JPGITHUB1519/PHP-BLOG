<?php
	
	require_once("../models/postModel.php");
	require_once 'baseController.php';
	if ($_SERVER['REQUEST_METHOD'] === 'GET') 
	{
		echo $twig->render("newPost.html", array(
		));
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') 
	{
		$title = $_POST["title"];
		$content = $_POST["content"];
		$error_text = "";
		$error_title = "";
		$error_content = "";
		$cond_error = false;
		if(empty($title))
		{
			$error_title = "You must fill this the title";
			$cond_error = true;
		}
		if(empty($content))
		{
			$error_content = "You must fill the content";
			$cond_error = true;
		}
		if(!$cond_error)
		{
			$post_obj = new Post(1,$title, $content, 1, $content, 1);
			$post_obj->insert();
		}
		else
		{
			echo $twig->render("newPost.html", array(
				"error_title" => $error_title,
				"error_content" => $error_content ));
		}
		
	}
	
?>