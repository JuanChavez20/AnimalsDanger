
$("#foto_user").change(function(){
	$("button").prop("disabled", this.files.length == 0);
});


//Validar campos del formulario
function validar_campos(){
	
	let correo = document.getElementById("email_user").value;
	
	if ( !(/\S+@\S+\.\S+/.test(correo)) ) {
		alert("ERROR: correo no valido.");
		return false;
	}

	let texto_materia = document.getElementById("materia/carrera").value;
	let no_deposito = document.getElementById("num_deposito").value;

	if (texto_materia == null || texto_materia.length == 0 || /^\s+$/.test(texto_materia)) {
		alert("Error: No puedes colocar datos vacios o solo espacios");
		return false;
	}

	if (no_deposito == null || no_deposito.length == 0 || isNaN(no_deposito)) {
		alert("Error: Debes ingresar un numero de deposito correcto");
		return false;
	}

	/*let archivo = document.getElementById("foto_user").value;
	if (archivo.length === 0) {
		alert("ERROR: debes seleccionar una imagen");
		return false;
	}*/


}

function validarSoloTextos(e){
	let key = e.keyCode || e.which;
	let tecla = String.fromCharCode(key).toLowerCase();
	let letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	let especiales = [8, 37, 39, 46];

	let tecla_especial = false;
	for (let i in especiales) {
		if (key == especiales[i]) {
			tecla_especial = true;
			break;
		}
	}
	if (letras.indexOf(tecla) == -1 && !tecla_especial) {
		return false;
	}
}

function limpiarCopy(){
	let valor = document.getElementById("materia/carrera").value;
	let tamanio = valor.length;
	for (var i = 0; i < tamanio; i++) {
		if (!isNaN(valor[i])) {
			document.getElementById("materia/carrera").value = '';
		}
	}
}



