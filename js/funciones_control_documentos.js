

$('#editEmpresaModal').on('show.bs.modal', function(event){
	var buton = $(event.relatedTarget)
	var id = buton.data('idd')
	$('#id_doc').val(id)

	var nombre = buton.data('namee')
	$('#edit_nombreEM').val(nombre)

	

	var tele = buton.data('tell')
	$('#edit_telefonoEM').val(tele)

	var correo = buton.data('correoo')
	$('#edit_email_userEM').val(correo)

	var direcc = buton.data('direc')
	$('#edit_direccionEM').val(direcc)
	

});
// es para que te deje ctualizar en la tabla en e l formulario al momento de pulsar editar

$('#edit_alumno').submit(function(event){
	var parametros = $(this).serialize();
	$.ajax({
		type: 'post',
		url: './funciones_php/estancias_estadias/editar_controldoc.php',
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
/* esta funcion es para que busqueda*/

 $(obtener_registros());

 function obtener_registros(dato){
 	$.ajax({
 		url: "./funciones_php/estancias_estadias/consulta_control_documentos.php",
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
 	if ( valorBusqueda != ""){
 		obtener_registros(valorBusqueda);

 	}else{
 		obtener_registros();
 	}

 });