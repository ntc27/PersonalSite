<!DOCTYPE HTML>
<!--Nicole Cheung-->
<html>
	<?php session_start(); ?>
	<head>
		<title>CompSci Student | Programmer | Hobbyist Artist</title>
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		<style>
			#mainBody {
				margin: 0 auto;
				margin-left: -10px;
				margin-right: -50px;
				width: 100%;
				margin-top: 22%;
				text-align: center;
				font-family: 'Poiret One', cursive;
				padding-top: 50px;
				padding-bottom: 50px;
				background-color: white;
				opacity: 0.85;
			}
			.name {
				font-size: 25pt;
			}
			.descript {
				font-size: 15pt;
				color: #cf871d;
			}

		</style>
	</head>
	<body>
		<div>
			<?php include "navbar.php"; ?>
			<div id = "mainBody">
				<div id = "icon"><img src = ""></div>
				<div class = "name">Nicole Cheung</div>
				<div class = "descript">CompSci Student | Programmer | Hobbyist Artist</div>
			</div>
			<?php include "contact_admin_form.php"; ?>
		</div>
		<script type = "text/javascript">
		</script>
	</body>
</html>