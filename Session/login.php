

    <div style="padding-left:200px;">
	
	  
      <form  id="form_log">	   
        <h3 >Вход пользователя</h3>
        <div id="login_tulemus"></div>
        <div id="login_tul"></div>
        <input type="text" name="login_log"   placeholder="Имя пользователя" autofocus >
        <p><input type="password" name="password_pas"  placeholder="Пароль" ></p>
        <p><button class="btn" type="submit">Вход</button></p>
		
      </form>
    </div>
	 <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
	$("#form_log").submit(function() {
		$.ajax(
			{
	           type: "POST",
	           url: "actions/log.php",
	           data: $("#form_log").serialize(),
	           success: function(data)
		           {
		           		$("#login_tulemus").html('');

		           		

		           		if(data==='OK!')
			           		{
			           			location.reload();
			           		}
		           		else if(data==='Wrong log or pass')
						   	{
								$("#login_tulemus").html('<div >Kasutajanimi või pass vale!</div>');
						   	}

					    else if(data==="no login")
						   	{
								$("#login_tulemus").html('<div >Kasutajanimi pole sisestatud!</div>');
						   	}
					  	else if(data==="Error")
						  	{
								$("#login_tulemus").html('<div >Viga_log</div>');		
						   	}		   
						else 
							{
								$("#login_tulemus").html('<div >LogError! </div>');		
							}
						form.login_log.value=form.password_pas.value='';
		          	}
	        });
		return false;
	});
	</script>


 
  
   
