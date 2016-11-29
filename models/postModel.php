<?php
	require_once("../Database.php");
	require_once("../General.php");
	// class model 
	class Post
	{
		//private $idpost;
		private $iduser;
		private $title;
		private $content;
		//private $date;
		private $status;

		public function __construct($iduser=null, $title=null, $content=null, $status = null)
		{
			/*
			if(!empty($idpost))
			{
				$this->idpost = intval($idpost);
			}
			*/
			if(!empty($iduser))
			{
				$this->iduser = intval($iduser);
			}
			if(!empty($title))
			{
				$this->title = $title;
			}
			if(!empty($content))
			{
				$this->content = $content;
			}
			/*
			if(!empty($date))
			{
				$this->date = $date;
			}
			*/
			if(!empty($status))
			{
				$this->status = $status;
			}			
		}

		public function insert()
		{
			$db = new Database();
			return $db->executeQuery("INSERT INTO post (iduser, title, content, date,status) VALUES(?,?,?,CURDATE(),?)", [$this->iduser, $this->title, $this->content, $this->status]);
		}

	}
?>