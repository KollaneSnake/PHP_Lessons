<?php
session_start();
if (isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["passwordN"]))
{
	$login = $_POST['login'];
	$password = $_POST['password'];
	$passwordN = $_POST['passwordN'];
	if($login != "" && $password != "" && $password == $passwordN )
	{
		$_SESSION["rankU"] = $login;
		$_SESSION["passU"] = $password;	
		echo "OK";
	}
	else
	{
		if(!$login)
			echo "no login";
		elseif(!$password)
			echo "no pass";
		elseif($password!=$passwordN)
			echo "no passN";			
		else 
			echo "vale";
	}
}
?>