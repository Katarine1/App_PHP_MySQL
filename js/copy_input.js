
// Copy data from select to input

$(document).ready(function(){

	$('#clients').change(function(){

		let clients = ($('#clients').val());
		$('#id_client').val(clients);

	});

	$('#clients_animal').change(function(){

		let clients = ($('#clients_animal').val());
		$('#id_client_animal').val(clients);
	});

	$('#clients_consult').change(function(){

		let clients = ($('#clients_consult').val());
		$('#id_client_consult').val(clients);
	});

	$('#consultations').change(function(){

		let consultation = ($('#consultations').val());
		$('#id_con').val(consultation);
	});

	$('#detail').change(function(){

		let detail = ($('#detail').val());
		$('#id_detail').val(detail);
	});
		
});
