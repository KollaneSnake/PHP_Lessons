<?php
session_start();
	if (isset($_POST['login']) && isset($_POST['password'])) 
		{
			$login=$_POST['login'];
			$password=$_POST['password'];
			if ($login==="admin" && $password==="123") 
			{
				$_SESSION['kasutaja']=$login;
				$_SESSION['passU']=$password;
				echo "OK!";
			}
			else
			{
				echo "Wrong log or pass"
			}
		}
		else
			{
				if (!$login) echo "no such login";
				else if(!$password) echo "enter pass";
				else echo "error!";
			}
?>