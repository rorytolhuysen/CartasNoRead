// ----------AGREGAR CLIENTE----------- //
function agregarCarta(){

	var url= '../controlador/new_card.php';
	$.ajax({
		type:'POST',
		url:url,
		data: $('#registration_form').serialize(),
		
	

	
	})
}
	
	

//---------MODIFICAR CARTA-----------//

$(function(){
	$("#boton_mod").click(function(){
		var url="../controlador/mod_card.php";
		$.ajax({
			type:"post",
			url:url,
			data:$("#form_mod").serialize(),
			success:function(data){
				//$("#resultado").html(data);
				
				$('#form_mod')[0].reset();
			}
		});
		return false;
	});
});


//----------ELIMINAR CARTA-----------//

$(function(){
	
	$("#boton_del").click(function(){
		var dato= $('#SerialCarta').val();
		var url='../controlador/del_card.php';

		var pregunta = confirm('Esta seguro que desea ELIMINAR este Cliente');
		if (pregunta==true){

		$.ajax({

			type:'POST',
			url:url,
			data:'SerialCarta='+dato,
			success: function(valor){

				alert('SE ELIMINA CORRECTAMENTE.....');
				
				
				return false;
			}
			
		})
		return false;



	}else{
		return false;
	}
})




	});