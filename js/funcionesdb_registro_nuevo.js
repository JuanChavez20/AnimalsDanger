

$('#editAlumnoModal').on('show.bs.modal', function(event){
	var buton = $(event.relatedTarget)
	var id = buton.data('idd')
	$('#id_alumno').val(id)

	var primera_opcionn = buton.data('primera_opcionn')
	$('#edit_primera_opcionT').val(primera_opcionn)

	var segunda_opcionn = buton.data('segunda_opcionn')
	$('#edit_segunda_opcionT').val(segunda_opcionn)

	var tercera_opcionn = buton.data('tercera_opcionn')
	$('#edit_tercera_opcionT').val(tercera_opcionn)

	var nombre_personall = buton.data('nombre_personall')
	$('#edit_nombre_personalT').val(nombre_personall)

	var apellidopp = buton.data('apellidopp')
	$('#edit_apellidopT').val(apellidopp)

	var apellidomm = buton.data('apellidomm')
	$('#edit_apellidomT').val(apellidomm)

	var estado_nacimientoo = buton.data('estado_nacimientoo')
	$('#edit_estado_nacimientoT').val(estado_nacimientoo)

	var municipio_nacimientoo = buton.data('municipio_nacimientoo')
	$('#edit_municipio_nacimientoT').val(municipio_nacimientoo)

	var localidad_nacimientoo = buton.data('localidad_nacimientoo')
	$('#edit_localidad_nacimientoT').val(localidad_nacimientoo)

	var fecha_nacimientoo = buton.data('fecha_nacimientoo')
	$('#edit_fecha_nacimientoT').val(fecha_nacimientoo)

	var Sexoo = buton.data('Sexoo')
	$('#edit_SexoT').val(Sexoo)

	var estado_civill = buton.data('estado_civill')
	$('#edit_estado_civilT').val(estado_civill)

	var personas_que_dependen_de_tii = buton.data('personas_que_dependen_de_tii')
	$('#edit_personas_que_dependen_de_tiT').val(personas_que_dependen_de_tii)

	var tipo_sangree = buton.data('tipo_sangree')
	$('#edit_tipo_sangreT').val(tipo_sangree)

	var numero_seguridad_sociall = buton.data('numero_seguridad_sociall')
	$('#edit_numero_seguridad_socialT').val(numero_seguridad_sociall)

	var enfermedad_conicaa = buton.data('enfermedad_conicaa')
	$('#edit_enfermedad_conicaT').val(enfermedad_conicaa)

	var enfermedad_respuestaa = buton.data('enfermedad_respuestaa')
	$('#edit_enfermedad_respuestaT').val(enfermedad_respuestaa)

	var discapacidadd = buton.data('discapacidadd')
	$('#edit_discapacidadT').val(discapacidadd)

	var instancia_medicaa = buton.data('instancia_medicaa')
	$('#edit_instancia_medicaT').val(instancia_medicaa)


	var lenguas_indigenass = buton.data('lenguas_indigenass')
	$('#edit_lenguas_indigenasT').val(lenguas_indigenass)

	var trabajas_actualmentee = buton.data('trabajas_actualmentee')
	$('#edit_trabajas_actualmenteT').val(trabajas_actualmentee)

	var nombre_padre_tutorr = buton.data('nombre_padre_tutorr')
	$('#edit_nombre_padre_tutorT').val(nombre_padre_tutorr)

	var telefono_padre_tutorr = buton.data('telefono_padre_tutorr')
	$('#edit_telefono_padre_tutorT').val(telefono_padre_tutorr)

	var callee = buton.data('callee')
	$('#edit_calleT').val(callee)

	var numero_casaa = buton.data('numero_casaa')
	$('#edit_numero_casaT').val(numero_casaa)

	var codigo_postall = buton.data('codigo_postall')
	$('#edit_codigo_postalT').val(codigo_postall)
	
	var colonia_contactoo = buton.data('colonia_contactoo')
	$('#edit_colonia_contactoT').val(colonia_contactoo)

	var localidad_contactoo = buton.data('localidad_contactoo')
	$('#edit_localidad_contactoT').val(localidad_contactoo)

	var municipio_contactoo = buton.data('municipio_contactoo')
	$('#edit_municipio_contactoT').val(municipio_contactoo)

	var estado_contactoo = buton.data('estado_contactoo')
	$('#edit_estado_contactoT').val(estado_contactoo)

	var telefono_contactoo = buton.data('telefono_contactoo')
	$('#edit_telefono_contactoT').val(telefono_contactoo)

	var celular_contactoo = buton.data('celular_contactoo')
	$('#edit_celular_contactoT').val(celular_contactoo)

	var email_contactoo = buton.data('email_contactoo')
	$('#edit_email_contactoT').val(email_contactoo)

	var escuela_egreso_escolarr = buton.data('escuela_egreso_escolarr')
	$('#edit_escuela_egreso_escolarT').val(escuela_egreso_escolarr)

	var estado_escolarr = buton.data('estado_escolarr')
	$('#edit_estado_escolarT').val(estado_escolarr)

	var municipio_escolarr = buton.data('municipio_escolarr')
	$('#edit_municipio_escolarT').val(municipio_escolarr)

	var Localidad_escolarr = buton.data('Localidad_escolarr')
	$('#edit_Localidad_escolarT').val(Localidad_escolarr)

	var año_bachillerato_inicio_escolarr = buton.data('año_bachillerato_inicio_escolarr')
	$('#edit_año_bachillerato_inicio_escolarT').val(año_bachillerato_inicio_escolarr)

	var año_bachillerato_fin_escolarr = buton.data('año_bachillerato_fin_escolarr')
	$('#edit_año_bachillerato_fin_escolarT').val(año_bachillerato_fin_escolarr)

	var perfil_escolarr = buton.data('perfil_escolarr')
	$('#edit_perfil_escolarT').val(perfil_escolarr)

	var especialidad_bachillerato_escolarr = buton.data('especialidad_bachillerato_escolarr')
	$('#edit_especialidad_bachillerato_escolarT').val(especialidad_bachillerato_escolarr)

	var promedio_escolarr = buton.data('promedio_escolarr')
	$('#edit_promedio_escolarT').val(promedio_escolarr)

	var curpp = buton.data('curpp')
	$('#edit_curpT').val(curpp)



});

$('#edit_alumno').submit(function(event){
	var parametros = $(this).serialize();
	$.ajax({
		type: 'post',
		url: './funciones_php/nuevo_ingreso/editar_alumno_registro_nuevo.php',
		data: parametros,
		beforeSend: function(objeto){
			$('#datosbd').html("Actualizando");
		},
		success: function(datos){
			$('#datosbd').html(datos);
			//location.reload();
		}
	});
	event.preventDefault();
});