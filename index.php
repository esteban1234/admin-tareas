<?php include ('vistas/encabezado.php'); ?>

<body class="body">
<div class="form-container">
	<p class="text-center">
		<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
	</p><br>
	<h4 class="text-center all-tittles" style="margin-bottom: 30px;">Inicia sesión con tu cuenta</h4><br>
	<form action="vistas/index.php" method="post" class="form_SRCB" data-type-form="login">
		<div class="group-material-login">
			<input type="text" class="material-login-control"  name="loginName" maxlength="70">
			<span class="bar-login"></span>
			<label><i class="fa fa-user-o" aria-hidden="true"></i> &nbsp;Nombre</label>
		</div><br>
		<div class="group-material-login">
			<input type="password" class="material-login-control" name="loginPassword"  maxlength="70">
			<span class="highlight-login"></span>
			<span class="bar-login"></span>
			<label><i class="fa fa-unlock-alt" aria-hidden="true"></i> &nbsp; Contraseña</label>
		</div>
		<br>
		<button class="btn-login btn-right" type="submit">ENTRAR&nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
		<button class="btn-login btn-left" type="submit"><i class="fa fa-unlock" aria-hidden="true"></i>&nbsp; RECUPERAR CLAVE</button>
		<div class="derechos-reservado">
			<p>2017 Athlon. Todos los derechos reservados</p>
		</div>  
	</form>
</div>
</body>
</html>