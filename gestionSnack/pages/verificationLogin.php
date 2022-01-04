<?php
session_start();
require 'database.php';
	$username=$password="";
	$usernameerror=$passworderror="";
	$isSuccess=false;

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username=verify($_POST['username']);
		$password=verify($_POST['password']);
		

		$isSuccess=true;

		if(empty($_POST["username"]))
		{
			$usernameerror="Login invalide ou inexistant ";
			$isSuccess=false;
		}

		if(empty($_POST["password"]))
		{
			$passworderror="Mot de passe invalide";
			$isSuccess=false;
		}

		$test1=false;
		$test2=false;
		$db= Database::connect();
		foreach ($db->query('SELECT * FROM client') as $row) {
			if($row['name']==$username){
				$_SESSION['username']=$username;
				$test1=true;

				if($password=$row['password'])
				{
					$_SESSION['password']=$password;
					$test2=true;
				}
			}
		}
		Database::disconnect();
		if($test1==false){
			$isSuccess=false;
			$usernameerror="Login invalide ou inexistant ";
		}

		if($test2==false){
			$isSuccess=false;
			$passworderror="Mot de passe incorrect";
		}
	
	}

	function verify($var){
		$var=trim($var);
		$var=stripcslashes($var);
		$var=htmlspecialchars($var);
		return $var;
	}
?>