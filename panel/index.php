<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Panel - Adecoagro</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body class="login">
	<div>
		<form action="actions/login.php" method="post">
			<img src="images/logo.svg">
			<input type="text" name="user" placeholder="Usuario">
			<input type="password" name="pass" placeholder="Contraseña">
			<input type="submit" value="Ingresar">
			<?php
				if(isset($_GET['info']) && $_GET['info'] == 'error'){
			?>
					<p class="error_login">Usuario y/o contraseña incorrecto</p>
			<?php
				}
			?>
		</form>
	</div>
</body>
</html>