

<table class="table table-hover text-center">

	<thead>
	<tr>
	<th class="text-center">id_Student</th>
	<th class="text-center">Nombre</th>
	<th class="text-center">Apellido paterno</th>
	<th class="text-center">Apellido Materno</th>
	<th class="text-center">Curp</th>
	<th class="text-center">No seguroSocial</th>
	<th class="text-center">Direccion</th>
	<th class="text-center">Estudios Previos</th>	
	<th class="text-center">Tipo de Sangre</th>
	<th class="text-center">Telefono</th>
	<th class="text-center">Correo</th>
	<th class="text-center">Tutor</th>
	<th class="text-center">Telefono de Tutor</th>
	<th class="text-center">Carrera</th>	
	<th class="text-center">Desabilitar/Habilitar</th>	
	<th class="text-center">Estado</th>
	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM  solicitudficha ORDER BY id_ficha ASC LIMIT 10";
	if (isset($_POST['consulta']) ) {
		$valor = $_POST['consulta'];

		$sql = "SELECT * FROM solicitudficha WHERE id_ficha LIKE '%".$valor."%' OR nombre LIKE '%".$valor."%' OR apellidop LIKE '%".$valor."%' OR apellidom LIKE '%".$valor."%' ";
	};
	include('../conexion_bd.php');
	$pdo = connect();
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {
		
	?>

	<tr>
	<td><?php echo $fila['id_ficha']; ?></td>
	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['apellidop']; ?></td>
	<td><?php echo $fila['apellidom']; ?></td>
	<td><?php echo $fila['curp']; ?></td>
	<td><?php echo $fila['seguro']; ?></td>
	<td><?php echo $fila['direccion']; ?></td>
	<td><?php echo $fila['eprevios']; ?></td>
	<td><?php echo $fila['tipos']; ?></td>
	<td><?php echo $fila['telefonoT']; ?></td>
	<td><?php echo $fila['email_user']; ?></td>
	<td><?php echo $fila['nya']; ?></td>
	<td><?php echo $fila['telefonoTa']; ?></td> -->
	<td><?php echo $fila['carrera']; ?></td>
	

	<td class="text-center"><span class="btn btn-danger btn-raised btn-sm delete" id="del_<?php echo $fila['id_ficha']; ?>"> <?php
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
			$('table td:last-child:contains(inactivo)').parents('tr').css('background-color', 'orange'); </script>";

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
 				url: './funciones_php/deletebd_solicitud_ficha.php',
 				type: 'post',
 				data: {id: id_listo},
 				success: function(respuesta){
 					if (respuesta == 1) {
 					$(boton).closest('tr').css('background', 'orange');
 					location.reload();
 				}


 				else{
 					alert('imposible hacer el cambio!');
 				}

 				}
 				
 			});
 				});
 			});

 		

</script>


 
	




