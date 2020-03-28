
function edit(id, txt_details) {

	// criar form de edição

	let form = document.createElement('form');
	form.action = "controll_details.php?action=updateDetails";
	form.method = 'post';

	// criar input para entrada de texto

	let inputDetails = document.createElement('input');
	inputDetails.type = 'text';
	inputDetails.name = 'details';
	inputDetails.style = 'width: 400px; margin-right: 20px;';
	inputDetails.value = txt_details;
	
	// criar button para envio de form

	let button = document.createElement('input');
	button.type = 'submit';
	button.innerHTML = 'UPDATE';
	button.className = 'btn';
	button.style = 'cursor:pointer;';

	// criar um input hidden para o id do cliente

	let inputId = document.createElement('input');
	inputId.type =  'hidden';
	inputId.name = 'id';
	inputId.value = id;

	// incluir os inputs no form
	
	form.appendChild(inputId);
	form.appendChild(inputDetails);
	form.appendChild(button);

	//alert(id);

	// limpar o texto para a inclusão do form

	let pDetails = document.getElementById('details_'+id);
	
	pDetails.innerHTML = '';

	// incluir form na página

	pDetails.insertBefore(form, pDetails[0]);
}

