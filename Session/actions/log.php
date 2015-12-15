<?php
session_start();
	if (isset($_POST['login_log']) && isset($_POST['password_pas'])) 
		{
			$log=$_POST['login_log'];
			$pass=$_POST['password_pas'];
			if ($log=='admin' && $pass=='123') 
			{
				$_SESSION['kasutaja']=$log;
				$_SESSION['passU']=$pass;
				echo 'OK!';
			}
			else
			{
				echo 'Wrong log or pass';
			}
		}
	else if(!isset($_POST['login_log']))
		{
			echo "no login";			
		}
		else if(!isset($_POST['password_pas'])) echo "Error";
		else echo '';
?>