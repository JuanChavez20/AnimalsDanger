
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

	var naci = buton.data('naci')
	$('#edit_nacimientoT').val(naci)

	var dire = buton.data('dire')
	$('#edit_direccionT').val(dire)

	var tel = buton.data('tel')
	$('#edit_telefonoT').val(tel)

	var corre = buton.data('corre')
	$('#edit_correoT').val(corre)

	var sex = buton.data('sex')
	$('#edit_sexoT').val(sex)

	var civil = buton.data('civil')
	$('#edit_estadocivilT').val(civil)

	var curp = buton.data('curp')
	$('#edit_curpT').val(curp)

	var carre = buton.data('carre')
	$('#edit_carreraT').val(carre)

	var cuatri = buton.data('cuatri')
	$('#edit_cuatrimestreT').val(cuatri)

	var grupo = buton.data('grupo')
	$('#edit_grupoT').val(grupo)

	var egre = buton.data('egre')
	$('#edit_egresoT').val(egre)

	var prome = buton.data('prome')
	$('#edit_promedioT').val(prome)

	
	


});

$('#edit_alumno').submit(function(event){
	var parametros = $(this).serialize();
	$.ajax({
		type: 'post',
		url: './funciones_php/control_info/editar_infoAlumnos.php',
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
		url : "./funciones_php/control_info/consulta_infoAlumnos.php",
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