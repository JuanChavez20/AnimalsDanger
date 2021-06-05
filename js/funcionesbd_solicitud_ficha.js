window.onload = function(){
	cargarData();
}

//Funcion para solicitar datos a la BD
function cargarData() {
	$('#datosbd').load('consulta_solicitud_ficha.php');
}

function Registrar() {
	var nombre = $('#nombreT').val();
	var apellidop = $('#apellidopT').val();
	var apellidom = $('#apellidomT').val();
	var direccion = $('#direccionT').val();
	var telefono = $('#telefonoT').val();
	var correo = $('#email_user').val();
	$.ajax({
		type: "POST",
		dataType: "html",
		url: "../funciones_php/insertarBd_solicitud_ficha.php",
		data: "nombre="+nombre+"&apellidop="+apellidop+"&apellidom="+apellidom+"&direccion="+direccion+"&telefono="+telefono+"$correo="+correo,
		success: function(respuesta){
			$('#repuesta').html(respuesta);
			cargarData();
			limpiarCajas();
		}
	});
}

function limpiarCajas() {
	$('#nombreT').val("");
	$('#apellidopT').val("");
	$('#apellidomT').val("");
	$('#direccionT').val("");
	$('#telefonoT').val("");
	$('#email_user').val("");
}


$(obtener_registros());

function obtener_registros(dato){
	$.ajax({
		url : "./funciones_php/solicitud_ficha/consulta_solicitud_ficha.php",
		type : "post",
		dataType : "html",
		data : {consulta: dato}
	})
	.done(function(resultado){
		$('#datosbd').html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function(){
	var valorBusqueda = $(this).val();
	if (valorBusqueda !="" ) {
		obtener_registros(valorBusqueda);
	}else{
		obtener_registros();
	}
});
