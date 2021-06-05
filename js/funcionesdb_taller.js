

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

	var correo = buton.data('correoo')
	$('#edit_email_user').val(correo)

	var direcc = buton.data('direc')
	$('#edit_direccionT').val(direcc)
	
	


});

$('#edit_alumno').submit(function(event){
	var parametros = $(this).serialize();
	$.ajax({
		type: 'post',
		url: './funciones_php/talleres/editar_alumno_taller.php',
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