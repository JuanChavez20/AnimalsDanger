

$('#editAlumnoModal').on('show.bs.modal', function(event){
	var buton = $(event.relatedTarget)
	var id = buton.data('idd')
	$('#id_alumno').val(id)

	var matric = buton.data('matri')
	$('#edit_matriculaT').val(matric)

	var correo = buton.data('correoo')
	$('#edit_emailT').val(correo)

	var carrer = buton.data('carre')
	$('#edit_carreraT').val(carrer)

	var cuat = buton.data('cua')
	$('#edit_cuatrimestreT').val(cuat)

	var foli = buton.data('fol')
	$('#edit_folioT').val(foli)

	


});

$('#edit_alumno').submit(function(event){
	var parametros = $(this).serialize();
	$.ajax({
		type: 'post',
		url: './funciones_php/reinscripcion/editar_alumno_reinscripcion.php',
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