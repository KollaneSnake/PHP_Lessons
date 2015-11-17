<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>HomePage</title>

	<link href="css/style.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>

		$(document).ready(function()
			{		    
		        $(".testSignUp").hide();
		        $(".testSignIn").hide();
		    });

		$(document).ready(function(){
		    $(".signIn").click(function(){
		    	$(".testSignUp").slideUp();
		        $(".testSignIn").slideToggle();
		    });
		});

		$(document).ready(function(){
		    $(".signUp").click(function(){
		    	$(".testSignIn").slideUp();
		        $(".testSignUp").slideToggle();
		    });
		});

		$('.up').change(function(){		});

		$('.btn').change(function(){		});


	</script>
</head>
<body>
	<div class='up'>
	<?php 
		if(isset($_SESSION['kasutaja']))
		{
			echo "<a href='actions/logout.php'>LogOut</a>";

			/*echo '<button class="logOut">LogOut</button>';*/
		}
		else
		{
			/*echo "<a href='login.php'>Sign in</a><br>";
			echo "<a href='register.php'>Sign up</a>";*/

			echo '<button class="signIn">Sign In</button>';
			echo '<button class="signUp">Sign Up</button>';
		}
	?>
	</div>

	<div class='testSignIn'>
		<?php 
			include 'login.php';
		?>
	</div>

	<div class='testSignUp'>
		<?php 
			include 'register.php';
		?>
	</div>

	

	<div class='live'>
	<p>Hello you are 
		
		<?php 
			if(isset($_SESSION['kasutaja']))
				echo $_SESSION['kasutaja'];
			else
				echo "NotSignUp";
		?>
		
	</p>
	</div>
</body>
</html>