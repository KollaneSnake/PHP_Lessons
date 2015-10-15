<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Andmed vaata</title>

   
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>
	<div style="margin-left: 300px;">
<!--------------------------------------->
<?php
if (isset($_SESSION["rankU"]) )
{	
	echo '<div style="margin-left: 50px;"><b>Hello, '.$_SESSION["rankU"].'</b> <a id="logout" href="#" >Logout</a></div>';
	
	echo "<br>Kasutaja nimi ".$_SESSION["rankU"]." registreeritud";
		echo "<br>Kasutaja pass ".$_SESSION["passU"];	
}
?>
<!--------------------------------------->
<br><br><a href="#" id="tagasi"  style="margin-left: 100px;">Tagasi</a>
	</div>
 <script src="js/jquery.min.js"></script>

    <script type="text/javascript">
	
	$( "#logout" ).click(function() {
	
	document.location.href = "actions/logout.php";
	});	

		$( "#tagasi" ).click(function() {
			document.location.href = "register.php";
		});
	</script>
  </body>
</html>
