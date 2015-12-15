

    <div style="padding-left:200px;">
	
	  
      <form  id="form_log">	   
        <h3 >Вход пользователя</h3>
        <div id="login_tulemus"></div>
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
           		$("#login_tulemus").html('');
           		if(data==="OK!")
           		{
           			header('Location: ../index.php');
           		}
           		else if(data==="Wrong log or pass")
			   {
				$("#login_tulemus").html('<div >Kasutajanimi või pass vale!</div>');
			   }

			   else if(data==="no such login")
			   {
				$("#login_tulemus").html('<div >Kasutajanime pole olemas!</div>');
			   }
			   else if(data==="enter pass")
			   {
				$("#login_tulemus").html('<div >Salasõna on puudu!</div>');		
			   }			   
				else 
				{
				$("#login_tulemus").html('<div >Error!</div>');			
				}
           }
         });
		return false;
	});
	</script>


 
  
   
