<?php
session_start();
if ($_POST["login"] == 'admin' && $_POST["password"] == '123' )
{
		$_SESSION["kasutaja"] = $login;
		$_SESSION["passU"] = $password;	
}

?>