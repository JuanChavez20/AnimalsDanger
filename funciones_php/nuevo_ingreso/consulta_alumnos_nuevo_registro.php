

<table class="table table-hover text-center">

	<thead>
	<tr>
	<th class="text-center">Id Numero</th>
	<th class="text-center">Primera opcion</th>
	<th class="text-center">Segunda opcion</th>
	<th class="text-center">Tercera opcion</th>
	<th class="text-center">Nombre (s)</th>
	<th class="text-center">Apellido paterno</th>
	<th class="text-center">Apellido materno</th>
	<th class="text-center">Estado de nacimiento</th>
	<th class="text-center">Municipio de nacimiento</th>
	<th class="text-center">Localidad de nacimiento</th>
	<th class="text-center">Fecha nacimiento</th>
	<th class="text-center">Sexo</th>
	<th class="text-center">Estado civil (Casado, Soltero o divorciado)</th>
	<th class="text-center">Personas que dependen de ti (Hermanos, Padres, otros)</th>
	<th class="text-center">Tipo de sangre</th>
	<th class="text-center">Numero de seguridad social</th>
	<th class="text-center">Padece alguna enfermedad cronica</th>
	<th class="text-center">Describala</th>
	<th class="text-center">Padece de alguna discapacidad</th>
	<th class="text-center">Instancia medica que te atiende</th>
	<th class="text-center">Hablas lenguas indigenas</th>
	<th class="text-center">Trabajas actualmente y donde</th>
	<th class="text-center">Nombre del padre o tutor</th>
	<th class="text-center">Telefono (10) digitos</th>
	<th class="text-center">Calle</th>
	<th class="text-center">Numero de casa</th>
	<th class="text-center">Codigo postal</th>
	<th class="text-center">Colonia</th>
	<th class="text-center">Localidad</th>
	<th class="text-center">Municipio</th>
	<th class="text-center">Estado</th>
	<th class="text-center">Telefono (10 digitos)</th>
	<th class="text-center">Celular</th>
	<th class="text-center">Email</th>
	<th class="text-center">Escuela de egreso</th>
	<th class="text-center">Estado</th>
	<th class="text-center">Municipio</th>
	<th class="text-center">Localidad</th>
	<th class="text-center">Año inicio de bachillerato</th>
	<th class="text-center">Año final de bachillerato</th>
	<th class="text-center">Perfil de egreso</th>
	<th class="text-center">Especialidad Bachillerato</th>
	<th class="text-center">Promedio</th>
	<th class="text-center">CURP</th>


	<th class="text-center">Actualizar</th>
	<th class="text-center">Desabilitar/Habilitar</th>
	
	<th class="text-center">Estado</th>
	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM  ejemplo2 ORDER BY id_student ASC";
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {
		
	?>




	

	<tr>
	<td><?php echo $fila['id_student']; ?></td>
	<td><?php echo $fila['primera_opcion']; ?></td>
	<td><?php echo $fila['segunda_opcion']; ?></td>
	<td><?php echo $fila['tercera_opcion']; ?></td>
	<td><?php echo $fila['nombre_personal']; ?></td>
	<td><?php echo $fila['apellidop']; ?></td>
	<td><?php echo $fila['apellidom']; ?></td>
	<td><?php echo $fila['estado_nacimiento']; ?></td>
	<td><?php echo $fila['municipio_nacimiento']; ?></td>
	<td><?php echo $fila['localidad_nacimiento']; ?></td>
	<td><?php echo $fila['fecha_nacimiento']; ?></td>
	<td><?php echo $fila['Sexo']; ?></td>
	<td><?php echo $fila['estado_civil']; ?></td>
	<td><?php echo $fila['personas_que_dependen_de_ti']; ?></td>
	<td><?php echo $fila['tipo_sangre']; ?></td>
	<td><?php echo $fila['numero_seguridad_social']; ?></td>
	<td><?php echo $fila['enfermedad_cronica']; ?></td>
	<td><?php echo $fila['enfermedad_respuesta']; ?></td>
	<td><?php echo $fila['discapacidad']; ?></td>
	<td><?php echo $fila['instancia_medica']; ?></td>
	<td><?php echo $fila['lenguas_indigenas']; ?></td>
	<td><?php echo $fila['trabajas_actualmente']; ?></td>
	<td><?php echo $fila['nombre_padre_tutor']; ?></td>
	<td><?php echo $fila['telefono_padre_tutor']; ?></td>
	<td><?php echo $fila['calle']; ?></td>
	<td><?php echo $fila['numero_casa']; ?></td>
	<td><?php echo $fila['codigo_postal']; ?></td>
	<td><?php echo $fila['colonia_contacto']; ?></td>
	<td><?php echo $fila['localidad_contacto']; ?></td>
	<td><?php echo $fila['municipio_contacto']; ?></td>
	<td><?php echo $fila['estado_contacto']; ?></td>
	<td><?php echo $fila['telefono_contacto']; ?></td>
	<td><?php echo $fila['celular_contacto']; ?></td>
	<td><?php echo $fila['email_contacto']; ?></td>
	<td><?php echo $fila['escuela_egreso_escolar']; ?></td>
	<td><?php echo $fila['estado_escolar']; ?></td>
	<td><?php echo $fila['municipio_escolar']; ?></td>
	<td><?php echo $fila['localidad_escolar']; ?></td>
	<td><?php echo $fila['ano_inicio_bachillerato']; ?></td>
	<td><?php echo $fila['ano_fin_bachillerato']; ?></td>
	<td><?php echo $fila['perfil_escolar']; ?></td>
	<td><?php echo $fila['especialidad_bachillerato_escolar']; ?></td>
	<td><?php echo $fila['promedio_escolar']; ?></td>
	<td><?php echo $fila['curp']; ?></td>




	<td><a href="#!"  data-target="#editAlumnoModal" data-toggle="modal" class="edit" 


	 data-idd='<?php echo $fila['id_student']; ?>'
	 data-primeraopcionn='<?php echo $fila['primera_opcion']; ?>' 
	 data-segundaopcionn='<?php echo $fila['segunda_opcion']; ?>'
	 data-terceraopcionn='<?php echo $fila['tercera_opcion']; ?>'
	 data-nombree='<?php echo $fila['nombre']; ?>' 
	 data-apellidopp='<?php echo $fila['apellidop']; ?>'
	 data-apellidomm='<?php echo $fila['apellidom']; ?>'
	 data-estado_nacimientoo='<?php echo $fila['estado_nacimiento']; ?>'
	 data-municipio_nacimientoo='<?php echo $fila['municipio_nacimiento']; ?>'
	 data-estado_nacimientoo='<?php echo $fila['estado_nacimiento']; ?>'
	 data-localidad_nacimientoo='<?php echo $fila['localidad_nacimiento']; ?>'
	 data-fecha_nacimientoo='<?php echo $fila['fecha_nacimiento']; ?>'
	 data-Sexoo='<?php echo $fila['Sexo']; ?>'
	 data-estado_civill='<?php echo $fila['estado_civil']; ?>'
	 data-personas_que_dependen_de_tii='<?php echo $fila['personas_que_dependen_de_ti']; ?>'
	 data-tipo_sangree='<?php echo $fila['tipo_sangre']; ?>'
	 data-numero_seguridad_sociall='<?php echo $fila['numero_seguridad_social']; ?>'
	 data-enfermedad_cronicaa='<?php echo $fila['enfermedad_cronica']; ?>'
	 data-enfermedad_respuestaa='<?php echo $fila['enfermedad_respuesta']; ?>'
	 data-discapacidadd='<?php echo $fila['discapacidad']; ?>'
	 data-instancia_medicaa='<?php echo $fila['instancia_medica']; ?>'
	 data-lenguas_indigenass='<?php echo $fila['lenguas_indigenas']; ?>'
	 data-trabajas_actualmentee='<?php echo $fila['trabajas_actualmente']; ?>'
	 data-nombre_padre_tutorr='<?php echo $fila['nombre_padre_tutor']; ?>'
	 data-telefono_padre_tutorr='<?php echo $fila['telefono_padre_tutor']; ?>'
	 data-callee='<?php echo $fila['calle']; ?>'
	 data-numero_casaa='<?php echo $fila['numero_casa']; ?>'
	 data-codigo_postall='<?php echo $fila['codigo_postal']; ?>'
	 data-colonia_contactoo='<?php echo $fila['colonia_contacto']; ?>'
	 data-localidad_contactoo='<?php echo $fila['localidad_contacto']; ?>'
	 data-municipio_contactoo='<?php echo $fila['municipio_contacto']; ?>'
	 data-estado_contactoo='<?php echo $fila['estado_contacto']; ?>'
	 data-telefono_contactoo='<?php echo $fila['telefono_contacto']; ?>'
	 data-celular_contactoo='<?php echo $fila['celular_contacto']; ?>'
	 data-email_contactoo='<?php echo $fila['email_contacto']; ?>'
	 data-escuela_egreso_escolarr='<?php echo $fila['escuela_egreso_escolar']; ?>'
	 data-estado_escolarr='<?php echo $fila['estado_escolar']; ?>'
	 data-telefono_contactoo='<?php echo $fila['telefono_contacto']; ?>'
	 data-celular_contactoo='<?php echo $fila['celular_contacto']; ?>'
	 data-email_contactoo='<?php echo $fila['email_contacto']; ?>'
	 data-escuela_egreso_escolarr='<?php echo $fila['escuela_egreso_escolar']; ?>'
	 data-estado_escolarr='<?php echo $fila['estado_escolar']; ?>'
	 data-municipio_escolarr='<?php echo $fila['municipio_escolar']; ?>'
	 data-Localidad_escolarr='<?php echo $fila['Localidad_escolar']; ?>'
	 data-ano_bachillerato_inicio_escolarr='<?php echo $fila['ano_bachillerato_inicio_escolar']; ?>'
	 data-ano_bachillerato_fin_escolarr='<?php echo $fila['ano_bachillerato_fin_escolar']; ?>'
	 data-perfil_escolarr='<?php echo $fila['perfil_escolar']; ?>'
	 data-especialidad_bachillerato_escolarr='<?php echo $fila['especialidad_bachillerato_escolar']; ?>'
	 data-promedio_escolarr='<?php echo $fila['promedio_escolar']; ?>'
	 data-curpp='<?php echo $fila['curp']; ?>'




	  ><i class="btn btn-info btn-raised btn-sm"  title="Update"> Editar</i></a></td>

	<td class="text-center"><span class="btn btn-danger btn-raised btn-sm delete" id="del_<?php echo $fila['id_student']; ?>"> <?php
	if ($fila['estado']=='inactivo')
	 { echo 'Habilitar';
	}else{
	echo 'Desabilitar';
		
	} ?></span></td>
	
	<td><?php echo $fila['estado']; ?></td>
	</tr>
	
	<?php
	if ($fila['estado']=='inactivo') {
		echo "<script>
			$('table td:last-child:contains(inactivo)').parents('tr').css('background-color', 'red'); </script>";

		// }else{
		// 	echo "<script>
		// 	$('table td:last-child:contains(activo)').parents('tr').css('background-color', 'green'); </script>";


		}
	}

	?>
 </tbody>
 </table>

 <script>
 	$(document).ready(function(){
 		$('.delete').click(function(){
 			var boton = this;
 			var id_stu = this.id;
 			var solo_id =id_stu.split("_");
 			var id_listo = solo_id[1];

 			$.ajax({
 				url: './funciones_php/nuevo_ingreso/deletebd_nuevo_registro.php',
 				type: 'post',
 				data: {id: id_listo},
 				success: function(respuesta){
 					if (respuesta == 1) {
 					$(boton).closest('tr').css('background', 'black');
 					location.reload();
 				}


 				else{
 					alert('No pudimos realizar el cambio.');
 			}

 				}
 			});
 				});
 			});
</script>


 
	




