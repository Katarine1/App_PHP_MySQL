<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Veterinary</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/edit_details.js"></script>
		<script>
			function remove(id) {
				location.href = 'list_details_page.php?action=removeDetails&id='+id;
			}
		</script>		
	</head>
	<body>
		<header id="header">
			<?php require "./scripts/header.php"; ?>
		</header>
		<section id="content">
			<section id="content_menu">
				<?php require "./scripts/menu.php"; ?>
			</section>
			<section id="menus">
				<section id="option">
					<ul>
						<li id="list_cli"><a href="list_clients_page.php">List Clients</a></li>
						
						<li id="list_ani"><a href="list_animals_page.php">List Animals</a></li>
						<li id="list_con"><a href="list_consultations_page.php">List Consultation</a></li>
						<li id="list_det"><a href="list_details_page.php">List Details</a></li>					
					</ul>
				</section>
			</section>
		</section>
	</body>
</html>