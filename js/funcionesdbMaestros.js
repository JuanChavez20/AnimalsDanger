$('#editMaestroModal').on('show.bs.modal', function(event){
	var buton = $(event.relatedTarget)
	var id = buton.data('idd')
	$('#id_alumno').val(id)

	var nombre = buton.data('namee')
	$('#edit_nombreT').val(nombre)

	var apellp = buton.data('apellp')
	$('#edit_apellidopT').val(apellp)

	var apellm = buton.data('apllm')
	$('#edit_apellidomT').val(apellm)

	var dire = buton.data('dire')
	$('#edit_direccionT').val(dire)

	var tel = buton.data('tel')
	$('#edit_telefonoT').val(tel)

	var corre = buton.data('corre')
	$('#edit_correoT').val(corre)

	var sex = buton.data('sex')
	$('#edit_sexoT').val(sex)

	var especi = buton.data('especi')
	$('#edit_especialidadT').val(especi)

	
	


});

$('#edit_maestro').submit(function(event){
	var parametros = $(this).serialize();
	$.ajax({
		type: 'post',
		url: './funciones_php/control_info/editar_infoMaestros.php',
		data: parametros,
		beforeSend: function(objeto){
			$('#datosbd').html("Actualizando");
		},
		success: function(datos){
			$('#datosbd').html(datos);
			location.reload();
		}
	});
	event.preventDefault();
});

$(obtener_registros());

function obtener_registros(dato){
	$.ajax({
		url : "./funciones_php/control_info/consulta_infoMaestros.php",
		type : "post",
		dataType: "html",
		data: {consulta: dato}
	})
	.done(function(resultado){
		$('#datosbd').html(resultado);
	})
}

$(document).on('keyup','#busqueda', function(){
	var valorBusqueda = $(this).val();
	if (valorBusqueda != "") {
		obtener_registros(valorBusqueda);

	}else{
		obtener_registros();
	}
});