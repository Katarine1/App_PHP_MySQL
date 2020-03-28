<?php

	require "./class/consultation.php";
	require "./service/service_consultation.php";
	require "./class/connection.php";

	
	$connection = new Connection();

	$action = isset($_GET['action']) ? $_GET['action'] : $action;

	$consultation = new Consultation();

	if($action == 'insertConsultation') {

		$date_consultation = $_POST['date'];	
		$id_client = $_POST['id_client'];	
		$doctor = $_POST['name_doctor'];
		$reason = $_POST['reason'];

		// SAVE

		if((isset($date_consultation) && empty($date_consultation) !== null) 
			&& (isset($id_client) && empty($id_client) !== null)
			&& (isset($doctor) && empty($doctor) !== null)
			&& (isset($reason) && empty($reason) !== null))
		{
			$consultation->__set('date_consultation', $date_consultation);
			$consultation->__set('id_client', $id_client);
			$consultation->__set('doctor', $doctor);
			$consultation->__set('reason', $reason);

			$serviceConsultation = new ServiceConsultation($connection, $consultation);

			$serviceConsultation->insert();
			header('location: consultation_page.php?insertConsultation=1');		
		}
	}
	else if($action == 'readConsultation') {
		
		// READ

		$serviceConsultation = new ServiceConsultation($connection, $consultation);
		$consultations = $serviceConsultation->list();
	}
	else if($action == 'updateConsultation') {

		// UPDATE

		$id_consultation = $_POST['id'];
		$date_consultation = $_POST['date'];
		$doctor_consultation = $_POST['doctor'];
		$reason_consultation = $_POST['reason'];

		$consultation->__set('id', $id_consultation);
		$consultation->__set('date_consultation', $date_consultation);
		$consultation->__set('doctor', $doctor_consultation);
		$consultation->__set('reason', $reason_consultation);

		$serviceConsultation = new ServiceConsultation($connection, $consultation);

		$serviceConsultation->update();
		header('location: list_consultations_page.php');
		
	}
	else if($action == 'removeConsultation') {
		
		// DELETE

		$consultation->__set('id', $_GET['id']);

		$serviceConsultation = new ServiceConsultation($connection, $consultation);

		$serviceConsultation->remove();	
		header('location: list_consultations_page.php');
	}

?>
