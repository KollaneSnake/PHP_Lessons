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
	
	<!-----------  !!!!!!!!!!!  -------------->
	  <div id="login_result"></div>
      <form  id="form">	   
        <h3 >Регистрация пользователя</h3>
        <input type="text" name="login"   placeholder="Имя пользователя" autofocus >
        <p><input type="password" name="password"  placeholder="Пароль" ></p>
        <p><input type="password" name="passwordN"  placeholder="Пароль еще раз" ></p>	
        <p><button  type="submit">Регистрация</button></p>
		
      </form>
		
    </div> 

	<!-----------  !!!!!!!!!!!  -------------->
	<div id="reg_result"></div>

    <script src="js/jquery.min.js"></script>  <!-- ЭТОТ скрипт обязательно!          -->
 
  
    <script type="text/javascript">
	$("form").submit(function() {
		$.ajax({
           type: "POST",
           url: "actions/reg.php", //!!!!!!!!!!!!!!check for data rightness
           data: $("form").serialize(),
           success: function(data)
           {
            //obrabotka
            if (data==="OK!") 
            {
              $("#reg_result").html('Kasutaja '+ form.login.value + ' registreeritud!');
              form.login.value=form.password.value=form.passwordN.value="";
              $("#login_result").html('')//clear ERROR
            }
            else if(data=="no login")
            {
              $("#login_result").html('No name');
              $("#reg_result").html('');
            }
            else if(data=="no pass")
            {
              $("#login_result").html('No pass');
              $("#reg_result").html('');
            }
            else if(data=="no pass match")
            {
              $("#login_result").html('No pass match');
              $("#reg_result").html('');
              form.password.value=form.passwordN.value="";
            }
            else if(data=="error!")
            {
              $("#login_result").html('Fatal ERROR!');
              $("#reg_result").html('');
            }
            else
            {
              $("#login_result").html('Fatal ERROR!');
              $("#reg_result").html('');
            }
			 
			 
           }
         });
		return false;
	});
	</script>

  </body>
</html>
