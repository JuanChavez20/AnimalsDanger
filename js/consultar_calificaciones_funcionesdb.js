

$('#editAlumnoModal').on('show.bs.modal', function(event){
	var buton = $(event.relatedTarget)
	var id = buton.data('idd')
	$('#id_alumno').val(id)

	var nombre = buton.data('namee')
	$('#edit_nombreT').val(nombre)

	var apellp = buton.data('apellp')
	$('#edit_apellidopT').val(apellp)

	var apellm = buton.data('apllm')
	$('#edit_apellidomT').val(apellm)

	var tele = buton.data('tell')
	$('#edit_telefonoT').val(tele)

	
	
	


});

$('#edit_alumno').submit(function(event){
	var parametros = $(this).serialize();
	$.ajax({
		type: 'post',
		url:'./funciones_php/consulta_calificaciones/actualizar_consulta_calificaciones.php',
		data: parametros,
		beforeSend: function(objeto){
			$('#mensaje').html("Actualizando");

		},
		succes:function(datos){
			$('#datosbd').html(datos);
			location.reload();
		}


	});
	event.preventDefault();
});