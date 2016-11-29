<?php
	class User
	{
		private $iduser;
		private $name;
		private $password;
		private $email;
		private $created_date;
		private $status;

		public function __construct($name=null, $password=null, $email=null)
		{
			$this->name = $name;
			$this->password = $password;
			$this->email = $email;
		}

	}
?>