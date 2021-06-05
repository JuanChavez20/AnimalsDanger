


$(obtener_registros());

function obtener_registros(dato){
	$.ajax({
		url: "./funciones_php/historial/calificaciones_historial.php",
		type: "post",
		dataType: "html",
		data: {consulta: dato}

	})
	.done(function(resultado){
		$('#datosbd').html(resultado);

	})
}

$(document).on('keyup','#busqueda', function(){
	var valorBusqueda = $(this).val();

	if(valorBusqueda != ""){
		obtener_registros(valorBusqueda);
	}else{
		obtener_registros();
	}
})
