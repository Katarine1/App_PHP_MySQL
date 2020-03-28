<?php

	require "./class/client.php";
	require "./service/service_client.php";
	require "./class/connection.php";

	$connection = new Connection();

	$action = isset($_GET['action']) ? $_GET['action'] : $action;

	$client = new Client();
	
	if($action == 'insertClient') {

		$name = $_POST['name_client'];
		$address = $_POST['address_client'];
		$telephone = $_POST['tel_client'];

		// SAVE

		if((isset($name) && empty($name) !== null) 
			&& (isset($address) && empty($address) !== null)
			&& (isset($telephone) && empty($telephone) !== null))
		{
			
			$client->__set('name', $name);
			$client->__set('address', $address);
			$client->__set('telephone', $telephone);

			$serviceClient = new ServiceClient($connection, $client);

			$serviceClient->insert();
			header('location: client_page.php?insertClient=1');
					
		}
		
	}
	else if($action == 'readClient') {

		// READ

		$serviceClient = new ServiceClient($connection, $client);
		$clients = $serviceClient->list();
	} 
	else if($action == 'updateClient') {

		// UPDATE

		$id_up = $_POST['id'];
		$name_up = $_POST['name'];
		$address_up = $_POST['address'];
		$telephone_up = $_POST['tel'];

		$client->__set('id', $id_up);
		$client->__set('name', $name_up);
		$client->__set('address', $address_up);
		$client->__set('telephone', $telephone_up);

		$serviceClient = new ServiceClient($connection, $client);

		$serviceClient->update();
		header('location: list_clients_page.php');

				
	}
	else if($action == 'removeClient') {

		// DELETE

		$client->__set('id', $_GET['id']);

		$serviceClient = new ServiceClient($connection, $client);

		$serviceClient->remove();	
		header('location: list_clients_page.php');
	}


?>
