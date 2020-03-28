<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Veterinary</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">		
	</head>
	<body>
		<header id="header">
			<?php require "./scripts/header.php"; ?>
		</header>
		<section id="content">
			<section id="content_menu">
				<?php require "./scripts/menu.php"; ?>
			</section>
			<?php if(isset($_GET['insertClient']) && $_GET['insertClient'] == 1) { ?>
				<div><h2>Client Saved!</h2></div>
			<?php } ?>	
			<section id="content_cli">			
				<section id="form_client">			
					<h2>Client</h2>
					<h3>Enter the data for registration</h3>			
					<form method="post" action="controll_client.php?action=insertClient">
						<input type="text" name="name_client" placeholder="Name"/><br/>
						<input type="text" name="address_client" placeholder="Address"/><br/>
						<input type="tel" name="tel_client" placeholder="Telephone"/><br/>
						<input type="submit" class="btn" name="btn_client" value="SAVE"/>
					</form>
				</section>
			</section>
		</section>
	</body>
</html>
