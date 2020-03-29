// Function Animal

function edit(id, txt_name, txt_age, txt_breed) {

	// create editing form

	let form = document.createElement('form');
	form.action = "controll_animal.php?action=updateAnimal";
	form.method = 'post';

	// create input for text input

	let inputName = document.createElement('input');
	inputName.type = 'text';
	inputName.name = 'name';
	inputName.style = 'width: 300px;margin-right: 20px;';	
	inputName.value = txt_name;


	let inputAge = document.createElement('input');
	inputAge.type = 'text';
	inputAge.name = 'age';
	inputAge.style = 'width: 400px; margin-right: 20px;';
	inputAge.value = txt_age;
	

	let inputBreed = document.createElement('input');
	inputBreed.type = 'text';
	inputBreed.name = 'breed';
	inputBreed.style = 'width: 130px;margin-right: 20px;';
	inputBreed.value = txt_breed;
	

	// create button to submit form

	let button = document.createElement('input');
	button.type = 'submit';
	button.value = 'SEND';
	button.className = 'btn';
	button.style = 'cursor:pointer;';

	// create a hidden input for the client id

	let inputId = document.createElement('input');
	inputId.type =  'hidden';
	inputId.name = 'id';
	inputId.value = id;

	// include inputs in the form
	
	form.appendChild(inputId);
	form.appendChild(inputName);
	form.appendChild(inputAge);
	form.appendChild(inputBreed);
	form.appendChild(button);

	//alert(id);

	// clear text for form inclusion
	
	let pName = document.getElementById('animalName_'+id);
	let pAge = document.getElementById('animalAge_'+id);
	let pBreed = document.getElementById('animalBreed_'+id);

	pName.innerHTML = '';
	pAge.innerHTML = '';
	pBreed.innerHTML = '';

	// include form on page

	pName.insertBefore(form, pName[0]);
	pAge.insertBefore(form, pAge[0]);
	pBreed.insertBefore(form, pBreed[0]);
}

