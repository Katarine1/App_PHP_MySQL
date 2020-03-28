<?php

	require "./class/details.php";
	require "./service/service_details.php";
	require "./class/connection.php";

	
	$connection = new Connection();

	$action = isset($_GET['action']) ? $_GET['action'] : $action;

	$detail = new Details();


	if($action == 'insertDetails') {

		$id_consultation = $_POST['id_consultation'];
		$detail_d = $_POST['details'];
		

		// SAVE

		if((isset($id_consultation) && empty($id_consultation) !== null) 
			&& (isset($detail_d) && empty($detail_d) !== null))
		{
			$detail->__set('id_consultation', $id_consultation);
			$detail->__set('details', $detail_d);

			$serviceDetails = new ServiceDetails($connection, $detail);

			$serviceDetails->insert();
			header('location: details_page.php?insertDetails=1');		
		}
	}
	else if($action == 'readDetails') {

		// READ

		$serviceDetails = new ServiceDetails($connection, $detail);
		$details = $serviceDetails->list();
	}
	else if($action == 'updateDetails') {

		// UPDATE

		$id_details = $_POST['id'];
		$date_details = $_POST['details'];

		$detail->__set('id', $id_details);
		$detail->__set('details', $date_details);

		$serviceDetails = new ServiceDetails($connection, $detail);

		$serviceDetails->update();
		header('location: list_details_page.php');
		
	}
	else if($action == 'removeDetails') {
		
		// DELETE

		$detail->__set('id', $_GET['id']);

		$serviceDetails = new ServiceDetails($connection, $detail);

		$serviceDetails->remove();	
		header('location: list_details_page.php');
	}

?>
