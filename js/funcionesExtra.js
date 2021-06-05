

$('#editAlumnoModal').on('show.bs.modal', function(event){
	var buton = $(event.relatedTarget)
	var id = buton.data('idd')
	$('#id_alumno').val(id)
	console.log("hola")

	var fechas = buton.data('fechas')
	$('#fechasT').val(fechas)

	var carrera = buton.data('carrera')
	$('#carreraT').val(carrera)

	var materia = buton.data('materia')
	$('#materiaT').val(materia)

	var cuatrimestre = buton.data('cuatrimestre')
	$('#cuatrimestreT').val(cuatrimestre)


});

$('#editAlumnoh').submit(function(event){
	var parametros = $(this).serialize();
	$.ajax({
		type: 'post',
		url:'./funciones_php/extras/editar_alumno.php',
		data: parametros,
		beforeSend: function(objeto){
			$('#mensaje').html("Actualizando");

		},
		succes:function(datos){
			$('#datosbd').html(datos);
			//location.reload();
		}


	});
	event.preventDefault();
});

$(obtener_registros());

function obtener_registros(dato){
	$.ajax({
		url : "./funciones_php/extras/consulta_extras.php",
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

