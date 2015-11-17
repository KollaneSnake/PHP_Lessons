

    <div style="padding-left:200px;">
	
	  <div id="login_result"></div>
	  
      <form  id="form_log">	   
        <h3 >Вход пользователя</h3>
        <input type="text" name="login"   placeholder="Имя пользователя" autofocus >
        <p><input type="password" name="password"  placeholder="Пароль" ></p>
        <p><button class="btn" type="submit">Вход</button></p>
		
      </form>
    </div>

    <script type="text/javascript">
	$("form").submit(function() {
		$.ajax({
           type: "POST",
           url: "actions/log.php",
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


 
  
   
