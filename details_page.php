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
			<?php if(isset($_GET['insertDetails']) && $_GET['insertDetails'] == 1) { ?>
				<div><h2>Details Saved!</h2></div>
			<?php } ?>
			<section id="content_d">
				<section id="form_details">
					<h2>Details</h2>
					<h3>Enter the data for registration</h3>
					<form method="post" action="controll_details.php?action=insertDetails">
						<select id="consultations" name="consultation">
							<option><?= "Select consultation..." ?></option>
							<?php 
								foreach($details as $item) {
											
							?>			
								<option value="<?= $item->id; ?>">
									<?= $item->name; ?>
									<h3> - </h3>
									<?= $item->date_consultation; ?>
									<h3> - </h3>
									<?= $item->reason; ?>
								</option>			
							<?php } ?>
						</select><br/>
						<input id="id_con" type="hidden" name="id_consultation" placeholder="Enter the number of the selected query" value=""><br/>
						<textarea name="details" placeholder="Consultation details"></textarea><br/>
						<input type="submit" class="btn" name="btn_details" value="SAVE"/>
					</form>
				</section>
			</section>
		</section>	
	</body>
</html>
