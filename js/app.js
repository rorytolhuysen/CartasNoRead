// ----------AGREGAR CLIENTE----------- //
function agregarCarta(){

	var url= '../controlador/new_card.php';
	$.ajax({
		type:'POST',
		url:url,
		data: $('#registration_form').serialize(),
		success:function(valor){
			window.location.href = "http://localhost/cartas/vistas/adm_view_card.php";
			
			return false;
		}
		
	

	
	})
	return false;
	
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
				window.location.href = "http://localhost/cartas/vistas/adm_view_card.php";
				//$('#form_mod')[0].reset();
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

				alert('CARTA ELIMINADA CORRECTAMENTE');
				window.location.reload()

				
				
				return false;
			}
			
		})
		return false;



	}else{
		return false;
	}
})




	});