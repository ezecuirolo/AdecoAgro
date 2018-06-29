<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="img/favicon.png">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700" rel="stylesheet">
		<link rel="stylesheet" href="css/typography.css">
		<link rel="stylesheet" href="css/ui.css">
		<link rel="stylesheet" href="css/static.css">
		<link rel="stylesheet" href="css/responsive.css">
		<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</head>
	<body>
		<?php 
			include('_inc/header.php');

				if(!isset($_GET['s'])){
					include('_inc/home.php');
				}

			include('_inc/footer.php'); 
		?>
	</body>
</html>
