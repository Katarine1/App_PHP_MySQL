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
		<script src="js/copy_input.js"></script>					
	</head>
	<body>
		<header id="header">
			<?php require "./scripts/header.php"; ?>
		</header>
		<section id="content">
			<section id="content_menu">
				<?php require "./scripts/menu.php"; ?>
			</section>
			<?php if(isset($_GET['insertAnimal']) && $_GET['insertAnimal'] == 1) { ?>
				<div><h2>Animal Saved!</h2></div>
			<?php } ?>
			<section id="content_a">
				<section id="form_animal">
					<h2>Animal</h2>
					<h3>Enter the data for registration</h3>
					<form method="post" action="controll_client.php?action=insertAnimal">
						<select id="clients_animal" name="clients">
							<option><?= "Select client..." ?></option>
							<?php 
								foreach($clients as $item) {
									
							?>
								<option value="<?= $item->id; ?>">
									<?= $item->name; ?>
								</option>

							<?php } ?>
						</select><br/>
						<input type="hidden" id="id_client_animal" name="id_client" placeholder="Enter the number of the selected client" value=""/><br/>			
							
						<input type="text" name="name_animal" placeholder="Animal Name"/><br/>
						<input type="text" name="age_animal" placeholder="Animal Age"/><br/>
						<input type="text" name="breed_animal" placeholder="Animal Breed"/><br/>
						<input type="submit" class="btn" name="btn_animal" value="SAVE"/>
					</form>
				</section>
			</section>
		</section>	
	</body>
</html>
