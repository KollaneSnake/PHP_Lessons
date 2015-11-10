<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>HomePage</title>

	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<?php 

	if(isset($_SESSION['kasutaja']))
	{
		echo "<a href='actions/logout.php'>LogOut</a>";
	}
	else
	{
		echo "<a href='login.php'>Sign in</a><br>";
		echo "<a href='register.php'>Sign up</a>";
	}

	 ?>
	<p>Hello you are 
	<?php 
	if(isset($_SESSION['kasutaja']))
	echo $_SESSION['kasutaja'];
	else
		echo "NotSignUp";

?></p>
</body>
</html>