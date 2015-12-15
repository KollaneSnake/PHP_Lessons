

    <div style="padding-left:200px;">
	
	  
      <form  id="form">	   
        <h3 >Регистрация пользователя</h3>
        <div id="login_result"></div>
        <input type="text" name="login"   placeholder="Имя пользователя" autofocus >
        <div id="login_result1"></div>
        <p><input type="password" name="password"  placeholder="Пароль" ></p>
        <div id="login_result2"></div>
        <p><input type="password" name="passwordN"  placeholder="Пароль еще раз" ></p>	
        <p><button class="btn" type="submit">Регистрация</button></p>
		
      </form>
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
           		if(data==="OK!")
           		{
           			header("Refresh:0");
           		}
           		else if(data==="no login")
				   {
					$("#login_result").html('<div >Kasutajanimi on puudu!</div>');
					$("#reg_result").html('');
				   }
			   else if(data==="no pass")
				   {
					$("#login_result1").html('<div >Salasõna on puudu!</div>');
					$("#reg_result").html('');			
				   }
				   else if(data==="nno pass match")
				   {
					$("#login_result2").html('<div >Salasõna on vale! Kontrolli salasõna</div>');
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
