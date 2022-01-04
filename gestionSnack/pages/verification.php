<?php
	
	include 'database.php';
	$password=$email=$name=$re_password=$Age=$type="";
	$passworderror=$emailerror=$nameerror=$re_passworderror=$Ageerror=$typeerror="";
	$isSuccess=false;

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name=verify($_POST["name"]);
		$password=verify($_POST["password"]);
		$email=verify($_POST["email"]);
		$re_password=verify($_POST["re_password"]);
		$Age=verify($_POST["Age"]);
		$type=verify($_POST["type"]);
		$isSuccess=true;

		if(empty($_POST["password"]))
		{
			$passworderror="Mot de passe invalide";
			$isSuccess=false;
		}
		if(empty($_POST["name"]))
		{
			$nameerror="nom invalide";
			$isSuccess=false;
		}

		if(empty($_POST["re_password"]) || $_POST["re_password"] != $_POST["password"])
		{
			$re_passworderror="Nouveau mot de passe incorrect";
			$isSuccess=false;
		}

		if(empty($_POST["Age"]) || $_POST["Age"]<18)
		{
			$Ageerror="Age incorrect ";
			$isSuccess=false;
		}

		

		if(!isEmail($email))
		{
			$emailerror="Email invalide";
			$isSuccess=false;
		}	

		if($isSuccess)
			{
				$db = Database::connect();
		        $statement = $db->prepare(" INSERT INTO `snack_bar`.`client` (`name`, `email`, `password`, `id`, `Age`, `type`) VALUES ('$name', '$email', '$password', NULL,'$Age','$type');");
		        $statement->execute(array($name,$email,$password,$Age,$type));
		        Database::disconnect();
		        header("Location: ListeUtilisqteur.php");
			}
	}

	

	function isEmail($var)
	{
		return filter_var($var, FILTER_VALIDATE_EMAIL);
	}

	function verify($var){
		$var=trim($var);
		$var=stripcslashes($var);
		$var=htmlspecialchars($var);
		return $var;
	}
?>