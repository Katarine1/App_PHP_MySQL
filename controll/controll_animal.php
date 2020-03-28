<?php

	require "./class/animal.php";
	require "./service/service_animal.php";
	require "./class/connection.php";

	$action = isset($_GET['action']) ? $_GET['action'] : $action;

	$animal = new Animal();
	$connection = new Connection();

	if($action == 'insertAnimal') {

		$id_client = $_POST['id_client'];
		$name_animal = $_POST['name_animal'];
		$age_animal = $_POST['age_animal'];
		$breed_animal = $_POST['breed_animal'];

		// SAVE

		if((isset($id_client) && empty($id_client) !== null) 
			&& (isset($name_animal) && empty($name_animal) !== null)
			&& (isset($age_animal) && empty($age_animal) !== null)
			&& (isset($breed_animal) && empty($breed_animal) !== null))
		{
			$animal->__set('id_client', $id_client);
			$animal->__set('name_animal', $name_animal);
			$animal->__set('age_animal', $age_animal);
			$animal->__set('breed_animal', $breed_animal);

			$serviceAnimal = new ServiceAnimal($connection, $animal);

			$serviceAnimal->insert();
			header('location: animal_page.php?insertAnimal=1');		
		}

	}
	else if($action == 'readAnimal') {
		
		// READ
		
		$serviceAnimal = new ServiceAnimal($connection, $animal);
		$animals = $serviceAnimal->list();
	}
	else if($action == 'updateAnimal') {
		
		// UPDATE

		$id_animal = $_POST['id'];
		$name_animal = $_POST['name'];
		$age_animal = $_POST['age'];
		$breed_animal = $_POST['breed'];

		$animal->__set('id', $id_animal);
		$animal->__set('name_animal', $name_animal);
		$animal->__set('age_animal', $age_animal);
		$animal->__set('breed_animal', $breed_animal);

		$serviceAnimal = new ServiceAnimal($connection, $animal);

		$serviceAnimal->update();
		header('location: list_animals_page.php');
		
	}
	else if($action == 'removeAnimal') {

		// DELETE

		$animal->__set('id', $_GET['id']);

		$serviceAnimal = new ServiceAnimal($connection, $animal);

		$serviceAnimal->remove();	
		header('location: list_animals_page.php');
	}


	


	


	// DELETE

?>
