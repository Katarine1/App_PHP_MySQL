<?php 
	
	$action = 'readConsultation';
	require "./controll_consultation.php";
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Veterinary</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/edit_consultation.js"></script>
		<script>
			function remove(id) {
				location.href = 'list_consultations_page.php?action=removeConsultation&id='+id;
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
				
				<h2>Consultations</h2>
						
				<?php foreach($consultations as $key => $item) { ?>
					<div>					
						<p><strong>Name Client: </strong><?= $item->name; ?></p>
						
						<p id="consultationDate_<?= $item->id; ?>">
							<strong>Animal Date: </strong><?= $item->date_consultation; ?></p>
								
						<p id="consultationDoctor_<?= $item->id; ?>">
							<strong>Animal Doctor: </strong><?= $item->doctor; ?></p>
								
						<p id="consultationReason_<?= $item->id; ?>">
							<strong>Animal Reason: </strong><?= $item->reason; ?></p>
								
					</div>
					<section id="buttons">
						<button onclick="remove(<?= $item->id; ?>);">Delete</button>

						<button onclick="edit(<?= $item->id; ?>,'<?= $item->date_consultation; ?>','<?= $item->doctor; ?>','<?= $item->reason; ?>');">Update</button>
					</section>
				<?php } ?>
			</section>	
		</section>
	</body>
</html>