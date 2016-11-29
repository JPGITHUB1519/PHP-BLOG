<?php
	// login stuffs
	class LoginUtility
	{
		/*
		public static function makeSalt()
		{
			$salt = "";
			$salt = array_merge(range('a','z'), range('A', 'Z'));
			shuffle($salt);
			return substr(implode($salt), 0, 10);
		}
	
		public static function generateHash($name, $password, $salt)
		{
			return password_hash($name . $password_hash . $salt, PASSWORD_BCRYPT);
		}

		public static function makePasswordHash($name, $password)
		{
			$hash = generateHash($name, $password, makeSalt());
			return $hash . "," . $salt;
		}

		public static function isValidPassword($name, $password, $hash)
		{
			$obtained_salt = split(",", $hash)[0];
			$test_hash = LoginUtility::generateHash($name, $password, $obtained_salt)& "," & $obtained_salt;
			if($test_hash == $obtained_salt)
			{
				return True;
			}
			return False;
		}
		*/

		public static function hashPassword($password)
		{
			return password_hash($password, PASSWORD_DEFAULT);
		}

		public static function isValidPassword($password, $hash)
		{
			return password_verify($password, $hash);
		}

		public static function validateUser()
		{
			
		}
	}
	echo LoginUtility::generateHash("jean", "1519", "python")
?>