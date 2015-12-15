

    <div style="padding-left:200px;">
	
	  <div id="login_tulemus"></div>
	  
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
				$("#login_tulemus").html('');
				form.login.value = form.password.value =form.passwordN.value= '';			   		   
			   }
			   else if(data==="no such login")
			   {
				$("#login_tulemus").html('<div >Kasutajanime pole olemas!</div>');
				$("#reg_result").html('');
			   }
			   else if(data==="enter pass")
			   {
				$("#login_tulemus").html('<div >Salasõna on puudu!</div>');
				$("#reg_result").html('');			
			   }			   
				else {
				$("#login_tulemus").html('<div >Error!/div>');
				$("#reg_result").html('');				
				}
           }
         });
		return false;
	});
	</script>


 
  
   
