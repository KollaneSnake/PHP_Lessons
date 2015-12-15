

    <div style="padding-left:200px;">
	
	  
      <form  id="form_reg">	   
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

	

    <script src="js/jquery.min.js"></script>
 
  
    <script type="text/javascript">
	$("#form_reg").submit(function() {
		$.ajax({
           type: "POST",
           url: "actions/reg.php",
           data: $("#form_reg").serialize(),
           success: function(data)
           {	
           		$("#login_result").html('');
           		$("#login_result1").html('');
           		$("#login_result2").html('');

           		if(data==="OK!")
           		{
           			location.reload();
           		}
           		else if(data==="no login")
				   {
					$("#login_result").html('<div >Kasutajanimi on puudu!</div>');
				   }
			   else if(data==="no pass")
				   {
					$("#login_result1").html('<div >Salasõna on puudu!</div>');		
				   }
				   else if(data==="no pass match")
				   {
					$("#login_result2").html('<div >Salasõna on vale! Kontrolli salasõna</div>');
					form.password.value =form.passwordN.value= '';				
				   }			   
				else {
				$("#login_result").html('<div >Vale andmed!</div>');			
				}
           }
         });
		return false;
	});
	</script>
