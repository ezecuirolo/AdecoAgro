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
				} else if($_GET['s'] == 'strategy'){
					include('_inc/strategy.php');
				} else if($_GET['s'] == 'organizational-structure'){
					include('_inc/organizational-structure.php');
				} else if($_GET['s'] == 'institutional-presentation'){
					include('_inc/institutional-presentation.php');
				} else if($_GET['s'] == 'business-divisions'){
					include('_inc/business-divisions.php');
				} else if($_GET['s'] == 'board-of-directors'){
					include('_inc/board-of-directors.php');
				} else if($_GET['s'] == 'executive-officers'){
					include('_inc/executive-officers.php');
				} else if($_GET['s'] == 'dividend-policy'){
					include('_inc/dividend-policy.php');
				} else if($_GET['s'] == 'bylaws'){
					include('_inc/bylaws.php');
				} else if($_GET['s'] == 'code-of-ethics'){
					include('_inc/code-of-ethics.php');
				} else if($_GET['s'] == 'insider-trading-policy'){
					include('_inc/insider-trading-policy.php');
				} else if($_GET['s'] == 'annual-general-meeetings'){
					include('_inc/annual-general-meeetings.php');
				} else if($_GET['s'] == 'events'){
					include('_inc/events.php');
				} else if($_GET['s'] == 'event'){
					include('_inc/event.php');
				} else if($_GET['s'] == 'contact'){
					include('_inc/contact.php');
				} else if($_GET['s'] == 'privacy-policy'){
					include('_inc/privacy-policy.php');
				} else if($_GET['s'] == 'term-of-use'){
					include('_inc/term-of-use.php');
				} else if($_GET['s'] == 'our-assets'){
					include('_inc/our-assets.php');
				}

			include('_inc/footer.php');
		?>
	</body>
</html>
