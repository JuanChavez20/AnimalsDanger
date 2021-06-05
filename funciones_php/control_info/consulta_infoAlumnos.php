<?php
	session_start();
	if(!$_SESSION){
		header('Location:../../index.php');
	}
?>



<table class="table table-hover text-center">

	<thead>
	<tr>
	<th class="text-center">Id</th>
	<th class="text-center">Matricula</th>
	<th class="text-center">Nombre</th>
	<th class="text-center">Apellido paterno</th>
	<th class="text-center">Apellido Materno</th>
	<th class="text-center">Fecha de nacimiento</th>
	<th class="text-center">Direccion</th>
	<th class="text-center">Telefono</th>
	<th class="text-center">Correo</th>
	<th class="text-center">Sexo</th>
	<th class="text-center">Estado civil</th>
	<th class="text-center">Curp</th>
	<th class="text-center">Carrera</th>
	<th class="text-center">Cuatrimestre</th>
	<th class="text-center">Grupo</th>
	<th class="text-center">Escuela de egreso</th>
	<th class="text-center">Promedio</th>
	<th class="text-center">Actualizar</th>
	<th class="text-center">Desabilitar/Habilitar</th>
	<th class="text-center">Estado</th>
	</tr>
	</thead>
	<tbody>


	<?php  
	$sql = "SELECT * FROM registro_alumnos ORDER BY id_alumno ASC LIMIT 10";
	if (isset($_POST['consulta']) ) {
		$valor = $_POST['consulta'];

		$sql ="SELECT * FROM registro_alumnos WHERE id_alumno LIKE '%".$valor."%' OR nombre LIKE '%".$valor."%' OR apellido_p LIKE '%".$valor."%' or apellido_m LIKE '%".$valor."%' ";
	}


    include('../conexion_bd.php');
	$pdo = connect();	
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {
		
	?>

	<tr>
	<td><?php echo $fila['id_alumno']; ?></td>
	<td><?php echo $fila['matricula']; ?></td>
	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['apellido_p']; ?></td>
	<td><?php echo $fila['apellido_m']; ?></td>
	<td><?php echo $fila['fecha_nacimiento']; ?></td>
	<td><?php echo $fila['direccion']; ?></td>
	<td><?php echo $fila['telefono']; ?></td>
	<td><?php echo $fila['correo']; ?></td>
	<td><?php echo $fila['sexo']; ?></td>
	<td><?php echo $fila['estado_civil']; ?></td>
	<td><?php echo $fila['curp']; ?></td>
	<td><?php echo $fila['carrera']; ?></td>
	<td><?php echo $fila['cuatrimestre']; ?></td>
	<td><?php echo $fila['grupo']; ?></td>
	<td><?php echo $fila['escuela_egreso']; ?></td>
	<td><?php echo $fila['promedio']; ?></td>
	
	<td><a href="#!"  data-target="#editAlumnoModal" data-toggle="modal" class="edit" data-idd='<?php echo $fila['id_alumno']; ?>' data-mat='<?php echo $fila['matricula']; ?>' data-namee='<?php echo $fila['nombre']; ?>' data-apellp='<?php echo $fila['apellido_p']; ?>' data-apllm='<?php echo $fila['apellido_m']; ?>' data-naci='<?php echo $fila['fecha_nacimiento']; ?>' data-dire='<?php echo $fila['direccion']; ?>' data-tel='<?php echo $fila['telefono']; ?>' data-corre='<?php echo $fila['correo']; ?>' data-sex='<?php echo $fila['sexo']; ?>' data-civil='<?php echo $fila['estado_civil']; ?>' data-curp='<?php echo $fila['curp']; ?>' data-carre='<?php echo $fila['carrera']; ?>' data-cuatri='<?php echo $fila['cuatrimestre']; ?>' data-grupo='<?php echo $fila['grupo']; ?>' data-egre='<?php echo $fila['escuela_egreso']; ?>' data-prome='<?php echo $fila['promedio']; ?>'><i class="btn btn-info btn-raised btn-sm"  title="Update"> Editar</i></a></td>

	<td class="text-center"><span class="btn btn-danger btn-raised btn-sm delete" id="del_<?php echo $fila['id_alumno']; ?>"> <?php
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
 				url: './funciones_php/control_info/deletebdinfoAlumnos.php',
 				type: 'post',
 				data: {id: id_listo},
 				success: function(respuesta){
 					if (respuesta == 1) {
 					$(boton).closest('tr').css('background', 'red');
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


	




