<?php 

	$action = 'readClient';
	require "./controll_client.php";	
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Veterinary</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/edit_client.js"></script>
		<script>
			function remove(id) {
				location.href = 'list_clients_page.php?action=removeClient&id='+id;
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
			<section id="content_list">
				<section id="list_clients">
				
				<h2>Clients</h2>
						
				<?php foreach($clients as $key => $item) { ?>
					<div>
						<p id="clientName_<?= $item->id; ?>">
							<strong>Name: </strong><?= $item->name; ?></p>
								
						<p id="clientAddress_<?= $item->id; ?>">
							<strong>Address: </strong><?= $item->address; ?></p>
								
						<p id="clientTel_<?= $item->id; ?>">
							<strong>Telephone: </strong><?= $item->telephone; ?></p>
								
					</div>
					<section id="buttons">
						<button onclick="remove(<?= $item->id; ?>);">Delete</button>

						<button onclick="edit(<?= $item->id; ?>,'<?= $item->name; ?>','<?= $item->address; ?>','<?= $item->telephone; ?>');">Update</button>
					</section>
				<?php } ?>
			</section>	
		</section>
	</body>
</html>