<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Регистрация пользователя</title>

    
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>

    <div style="padding-left:200px;">
	
	  <div id="login_result"></div>
	  
      <form  id="form">	   
        <h3 >Регистрация пользователя</h3>
        <input type="text" name="login"   placeholder="Имя пользователя" autofocus >
        <p><input type="password" name="password"  placeholder="Пароль" ></p>
        <p><input type="password" name="passwordN"  placeholder="Пароль еще раз" ></p>	
        <p><button  type="submit">Регистрация</button></p>
		
      </form>
	<p style="padding-top:10px;"><a id="andmed" href="#">Данные</a></p>	
    </div> <!-- /container -->

<div id="reg_result" style="padding-left:200px;"></div>
	

    <script src="js/jquery.min.js"></script>
 
  
    <script type="text/javascript">
	$("form").submit(function() {
		$.ajax({
           type: "POST",
           url: "actions/reg.php",
           data: $("form").serialize(),
           success: function(data)
           {
			   if (data === "OK")
			   {			 
				$("#reg_result").html('<div >Kasutaja '+form.login.value +' registreeritud!</div>');
				$("#login_result").html('');
				form.login.value = form.password.value =form.passwordN.value= '';			   		   
			   }
			   else if(data==="no login")
			   {
				$("#login_result").html('<div >Kasutajanimi on puudu!</div>');
				$("#reg_result").html('');
			   }
			   else if(data==="no pass")
			   {
				$("#login_result").html('<div >Salasõna on puudu!</div>');
				$("#reg_result").html('');			
			   }
			   else if(data==="no passN")
			   {
				$("#login_result").html('<div >Salasõna on vale! Kontrolli salasõna</div>');
				form.password.value =form.passwordN.value= '';
				$("#reg_result").html('');				
			   }			   
				else {
				$("#login_result").html('<div >Vale andmed!</div>');
				$("#reg_result").html('');				
				}
           }
         });
		return false;
	});
	</script>
	<script type="text/javascript">
			$( "#andmed" ).click(function() {
			document.location.href = "vaata.php";
		});
	</script>

  </body>
</html>
