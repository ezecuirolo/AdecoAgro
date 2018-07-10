<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Panel - Adecoagro</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body class="panel">
	<header>
		<div class="container">
			<img src="images/logo.svg">

			<nav>
				<ul>
					<li><a href="panel.php?s=news">Noticias</a></li>
					<li><a href="panel.php?s=financials">Finanzas</a></li>
					<li><a href="actions/logout.php">Cerrar sesión</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
		<div class="container">
			<?php
				if(!isset($_GET['s'])){
					include('modulos/news.php');
				} else if($_GET['s'] == 'news'){
					if(!isset($_GET['action'])){
						include('modulos/news.php');
					} else if($_GET['action'] == 'new'){
						include('modulos/new_news.php');
					} else {
						include('modulos/news.php');	
					}
				}
			?>
		</div>
	</main>
</body>
</html>