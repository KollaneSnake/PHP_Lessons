<?php

	if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['passwordN'])) 
	{
		$login=$_POST['login'];
		$password=$_POST['password'];
		$passwordN=$_POST['passwordN'];

		if ($login!="" && $password!="" && $password == $passwordN) 
		{
			echo "OK!";
		}
		else
		{
			if (!$login) echo "no login";
			else if(!$password) echo "no pass";
			else if ($password!=$passwordN) echo "no pass match";
			else echo "error!";
		}
	}