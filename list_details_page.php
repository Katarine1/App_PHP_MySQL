<?php 
	
	$action = 'readDetails';
	require "./controll_details.php";
	
?>

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
			<section id="content_list">
				<section id="list_clients">
				
				<h2>Details</h2>
						
				<?php foreach($details as $key => $item) { ?>
					<div>					
						<p><strong>Name Client: </strong><?= $item->name; ?></p>

						<p><strong>Name Animal: </strong><?= $item->name_animal; ?></p>
						
						<p><strong>Date Consultation: </strong><?= $item->date_consultation; ?></p>

						<p><strong>Consulta: </strong><?= $item->reason; ?></p>

						<p id="details_<?= $item->id; ?>">
							<strong>Details: </strong><?= $item->details; ?></p>
								
					</div>
					<section id="buttons">
						<button onclick="remove(<?= $item->id; ?>);">Delete</button>

						<button onclick="edit(<?= $item->id; ?>,'<?= $item->details; ?>');">Update</button>
					</section>
				<?php } ?>
			</section>	
		</section>
	</body>
</html>