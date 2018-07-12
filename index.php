<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="img/favicon.png">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
		<link rel="stylesheet" href="css/typography.css">
		<link rel="stylesheet" href="css/ui.css">
		<link rel="stylesheet" href="css/static.css">
		<link rel="stylesheet" href="css/responsive.css">

		<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</head>
	<body>
		<?php 
			include('_inc/header.php');

				if(!isset($_GET['s'])){
					include('_inc/home.php');
				} else if($_GET['s'] == 'news'){
					include('_inc/text.php');
				} else if($_GET['s'] == 'financials'){
					include('_inc/financials.php');
				}

			include('_inc/footer.php'); 
		?>
	</body>
</html>
