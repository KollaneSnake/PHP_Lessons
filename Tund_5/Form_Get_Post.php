<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Get Post</title>
</head>
<body>
	<h1>Meetod GET</h1>
	<form method="get">
	UserName:
	<input type="text" name="nimi">
	<br>
	PassWord:
	<input type="password" name="pass">
	<br>
	<input type="submit" name="send" value="SendGet">
	</form>

	<?php
		echo "<br>Registration Data";
		if($_GET['send'])
		{
			$nimi=$_GET['nimi'];
			$pass=$_GET['pass'];
			if($nimi!="" && $pass!="")
			{
				echo '<br>Today time'.date("d-m-Y H:i:s");
				echo '<br>Kasutaja: '.$nimi.' olete regatud';
				echo '<br>Teie pass: '.$pass;
			}
		}
	?>

	<h1>Meetod Post</h1>
	<form method="Post">
	UserName:
	<input type="text" name="nimi2">
	<br>
	PassWord:
	<input type="password" name="pass2">
	<br>
	<input type="submit" name="send2" value="SendGet">
	</form>

	<?php
		echo "<br>Registration Data";
		if($_POST['send2'])
		{
			$nimi2=$_POST['nimi2'];
			$pass2=$_POST['pass2'];
			if($nimi2!="" && $pass2!="")
			{
				echo '<br>Today time '.date("d-m-Y H:i:s");
				echo '<br>Kasutaja: '.$nimi2.' olete regatud';
				echo '<br>Teie pass: '.$pass2;
			}
		}
	?>
</body>
</html>