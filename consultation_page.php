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
			<?php if(isset($_GET['insertConsultation']) && $_GET['insertConsultation'] == 1) { ?>
				<div><h2>Consultation Saved!</h2></div>
			<?php } ?>
			<section id="content_con">
				<section id="form_consultation">
					<h2>Consultation</h2>
					<h3>Enter the data for registration</h3>
					<form method="post" action="controll_consultation.php?action=insertConsultation">
						<select id="clients" name="clients">
							<option><?= "Select client..." ?></option>
							<?php 
								foreach($clients as $item) {
											
							?>
								<option value="<?= $item->id; ?>">
									<?= $item->name; ?>
								</option>			
							<?php } ?>
						</select><br/>		
						<input id="id_client" type="hidden" name="id_client" placeholder="Enter the number of the selected client" value=""><br/>
						<input type="date" name="date"/><br/>
						<input type="text" name="name_doctor" placeholder="Veterinary Name"/><br/>
						<input type="text" name="reason" placeholder="Reason"/><br/>
						<input type="submit" class="btn" name="btn_consultation" value="SAVE"/>
					</form>
				</section>
			</section>	
		</section>
	</body>
</html>
