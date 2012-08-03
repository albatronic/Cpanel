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
	include("css/estilos-index.php");     
	include("js/javascript-index.php");     
}
?>
</head>
<body id="theme-default" class="full_block">
<div id="login_page">
	<div class="login_container">
		<!-- <div class="login_header blue_lgel">
			<ul class="login_branding">
				<li>
				<div class="logo_small">
					<img src="images/logo-bingo.png" width="99" height="35" alt="bingo">
				</div>
				<span>All Purpose Responsive Admin Template</span>
				</li>
				<li class="right go_to"><a href="#" title="Go to Main Site" class="home">Go To Main Site</a></li>
			</ul>
		</div> -->
		<form action="widgets.php" method="get">
			<div class="login_form">
				<h3 class="blue_d">Panel de Control</h3>
				<ul>
					<li class="login_mensaje_error">
					USER INCORRECTO
					</li>

					<li class="login_app">
						<select class="chzn-select" style="width:280px">
							<option>kaia</option>
							<option>galapago</option>
							<option>emmca</option>
							<option>hotel</option>
							<option>regantes</option>
						</select>
					<!--<input name="" value="" type="text">-->
					</li>
					<li class="login_user">
					<input name="" value="" type="text">
					</li>
					<li class="login_pass">
					<input name="" type="password" value="">
					</li>

				</ul>
			</div>
			<input class="login_btn blue_lgel" name="" value="Login" type="submit">
			<ul class="login_opt_link">
				<li><a href="olvido-contrasena.php">Olvidó su Contraseña?</a></li>
				<!--<li class="remember_me right">
				<input name="apdiv" class="rem_me" type="checkbox" value="checked">
				Remember Me</li> -->
			</ul> 
		</form>
	</div>
</div>
</body>
</html>