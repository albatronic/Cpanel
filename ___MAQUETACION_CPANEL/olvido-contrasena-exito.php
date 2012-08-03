<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>PANEL DE CONTROL</title>


<?php
	include("js/detecto_navegadores_viejos.php");     
if($navegador_viejo=="SI"){
	include("css/estilos-navegadorviejo.php");     
}else{
	include("css/estilos-olvidocontrasena.php");     
	include("js/javascript-olvidocontrasena.php");     
}
?>
</head>
<body id="theme-default" class="full_block">
<div id="login_page">
	<div class="login_container">

		<form action="widgets.php" method="get">
			<div class="login_form">
				<h3 class="blue_d">¿Olvidó su Contraseña?</h3>
				<ul>

					<li class="olvido_password_exito">
					Le hemos enviado un e-mail con su nueva Contraseña
					</li>

				</ul>
			</div>
			<!--<input class="login_btn blue_lgel" name="" value="Enviar" type="submit"> -->
			<ul class="login_opt_link">
				<!-- <li><a href="forgot-pass.html">Olvidó su Contraseña?</a></li> -->
				<!--<li class="remember_me right">
				<input name="apdiv" class="rem_me" type="checkbox" value="checked">
				Remember Me</li> -->
			</ul> 
		</form>
	</div>
</div>
</body>
</html>