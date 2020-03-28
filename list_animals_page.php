<?php 
	
	$action = 'readAnimal';
	require "./controll_animal.php";
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Veterinary</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/edit_animal.js"></script>
		<script>
			function remove(id) {
				location.href = 'list_animals_page.php?action=removeAnimal&id='+id;
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
				
				<h2>Animals</h2>
						
				<?php foreach($animals as $key => $item) { ?>
					<div>					
						<p><strong>Name Client: </strong><?= $item->name; ?></p>
						
						<p id="animalName_<?= $item->id; ?>">
							<strong>Animal Name: </strong><?= $item->name_animal; ?></p>
								
						<p id="animalAge_<?= $item->id; ?>">
							<strong>Animal Age: </strong><?= $item->age_animal; ?></p>
								
						<p id="animalBreed_<?= $item->id; ?>">
							<strong>Animal Breed: </strong><?= $item->breed_animal; ?></p>
								
					</div>
					<section id="buttons">
						<button onclick="remove(<?= $item->id; ?>);">Delete</button>

						<button onclick="edit(<?= $item->id; ?>,'<?= $item->name_animal; ?>','<?= $item->age_animal; ?>','<?= $item->breed_animal; ?>');">Update</button>
					</section>
				<?php } ?>
			</section>	
		</section>
	</body>
</html>