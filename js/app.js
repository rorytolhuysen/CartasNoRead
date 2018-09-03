function agregarCliente(){

	var url= '../controlador/new_card.php';
	$.ajax({
		type:'POST',
		url:url,
		data: $('#registration_form').serialize(),
		
	
		success:function(dato){
		
			var valor = dato;
			
			if (valor==1){
				$('#registration_form')[0].reset();
	
				//$('#mensaje').addClass('mal').html('YA SE ENCUENTRE REGISTRADO!!!').show(200).delay(2500).hide(200);
				$('#mensaje').addClass('mal').html('DATOS YA INGRESADOS!!!!').show(200).delay(2500).hide(200);
	
				//$('#mensaje').addClass('bien').html('SE GUARDO CORRECTAMENTE !!!').show(200).delay(2500).hide(200);
			
			return;
			
			}else{
			
				$('#registration_form')[0].reset();
				$('#tabla-registro').html(dato);
				$('#mostrar-cliente').modal({
					show: true,
					backdrop: 'static'
				});
				return;
			}
		return false;
		}
			
	
	})
	
	return false;
	}