
$("#foto_user").change(function(){ //una funcion anonima, y el change mantiene vacio
	$("button").prop("disabled", this.files.length == 0);// la funcion prop desabilita la funcion

});


//validar campos tipo email
function validar_campos(){//crear una nueva funcion
	let correo = document.getElementById("email_user").value;//se manda llamar la id 
	if ( !(/\S+@\S+\.\S+/.test(correo)) ) { //colocar una forma de correo
		alert("ERROR: tu correo no es valido.");//se manda un mensaje de error
		return false;//retornar la funcion

	}

		
			let texto_materia = document.getElementById("materiap").value;

			let no_deposito = document.getElementById("num_deposito").value;
			if (texto_materia === null || texto_materia.length == 0 || /^\s+$/. test(texto_materia)) {
				alert("Error: No puedes colocar datos vacios o solo espacios" );
				return false;
			
			}
			if (no_deposito == null || no_deposito.length == 0 || isNaN(no_deposito)){
				alert("Error: Debes ingresar un numero correcto");
				return false;
			}

			/*let archivo= document.getElementById("foto_user").value;
			if (archivo.length == 0 ) {
				alert("ERROR: Debes agregar una imagen")
				return false;
			}*/
	

}




		function validarSoloTextos(e){
			let key = e.keyCode || e.which;
			let tecla = String.fromCharCode(Key).toLowerCase();
			let letras = "àèìòùabcdefghijklmnñopqrstuvwxyz";
			let especiales = [8, 10, 35, 98];

			let tecla_especial = false;
			for(let i in especiales){
				if(key == especiales[i]){
					tecla_especial = true;
					break;
				}
			}
			if (letras.indexOf(tecla) == -1 && !tecla_especial){
				return false;

			}
		}

		function limpiarCopy(){
			let valor = document.getElementById("materia_p").value;
			let tamanio = valor.length;
			for(var i = 0; i < tamanio; i++){
				if(!isNaN(valor[i])){
					document.getElementById("materia_p").value = '';
				}
			}
		}