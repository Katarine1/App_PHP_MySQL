
function edit(id, txt_name, txt_address, txt_tel) {

	// criar form de edição

	let form = document.createElement('form');
	form.action = "controll_client.php?action=updateClient";
	form.method = 'post';

	// criar input para entrada de texto

	let inputName = document.createElement('input');
	inputName.type = 'text';
	inputName.name = 'name';
	inputName.style = 'width: 300px;margin-right: 20px;';	
	inputName.value = txt_name;


	let inputAddress = document.createElement('input');
	inputAddress.type = 'text';
	inputAddress.name = 'address';
	inputAddress.style = 'width: 400px; margin-right: 20px;';
	inputAddress.value = txt_address;
	

	let inputTel = document.createElement('input');
	inputTel.type = 'text';
	inputTel.name = 'tel';
	inputTel.style = 'width: 130px;margin-right: 20px;';
	inputTel.value = txt_tel;
	

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
	form.appendChild(inputName);
	form.appendChild(inputAddress);
	form.appendChild(inputTel);
	form.appendChild(button);

	//alert(id);

	// limpar o texto para a inclusão do form
	
	let pName = document.getElementById('clientName_'+id);
	let pAddress = document.getElementById('clientAddress_'+id);
	let pTel = document.getElementById('clientTel_'+id);
	
	pName.innerHTML = '';
	pAddress.innerHTML = '';
	pTel.innerHTML = '';

	// incluir form na página

	pName.insertBefore(form, pName[0]);
	pAddress.insertBefore(form, pAddress[0]);
	pTel.insertBefore(form, pTel[0]);
}

