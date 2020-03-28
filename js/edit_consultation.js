
function edit(id, txt_date, txt_doctor, txt_reason) {

	// criar form de edição

	let form = document.createElement('form');
	form.action = "controll_consultation.php?action=updateConsultation";
	form.method = 'post';

	// criar input para entrada de texto

	let inputDate = document.createElement('input');
	inputDate.type = 'text';
	inputDate.name = 'date';
	inputDate.style = 'width: 300px;margin-right: 20px;';	
	inputDate.value = txt_date;


	let inputDoctor = document.createElement('input');
	inputDoctor.type = 'text';
	inputDoctor.name = 'doctor';
	inputDoctor.style = 'width: 400px; margin-right: 20px;';
	inputDoctor.value = txt_doctor;
	

	let inputReason = document.createElement('input');
	inputReason.type = 'text';
	inputReason.name = 'reason';
	inputReason.style = 'width: 130px;margin-right: 20px;';
	inputReason.value = txt_reason;
	

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
	form.appendChild(inputDate);
	form.appendChild(inputDoctor);
	form.appendChild(inputReason);
	form.appendChild(button);

	//alert(id);

	// limpar o texto para a inclusão do form

	let pDate = document.getElementById('consultationDate_'+id);
	let pDoctor = document.getElementById('consultationDoctor_'+id);
	let pReason = document.getElementById('consultationReason_'+id);
	
	pDate.innerHTML = '';
	pDoctor.innerHTML = '';
	pReason.innerHTML = '';

	// incluir form na página

	pDate.insertBefore(form, pDate[0]);
	pDoctor.insertBefore(form, pDoctor[0]);
	pReason.insertBefore(form, pReason[0]);
}

