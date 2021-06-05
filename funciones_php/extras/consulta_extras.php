

<table class="table table-hover text-center">

	<thead>
	<tr>
	<th class="text-center">id_extra</th>
	<th class="text-center">fechas</th>
	<th class="text-center">carrera</th>
	<th class="text-center">materia</th>
	<th class="text-center">cuatrimestre</th>

	<th class="text-center">Concluido/Pendiente</th>
	
	<th class="text-center">Estado</th>
	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM  extras ORDER BY id_extra ASC LIMIT 10";

	if (isset($_POST['consulta']) ) {
		$valor = $_POST['consulta'];

		$sql ="SELECT * FROM extras WHERE id_extra LIKE '%".$valor."%' OR fechas LIKE '%".$valor."%' OR carrera LIKE '%".$valor."%' or materia LIKE '%".$valor."%' ";
	}


    include('../conexion_bd.php');
	$pdo = connect();	
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {
		
	?>

	<tr>
	<td><?php echo $fila['id_extra']; ?></td>
	<td><?php echo $fila['fechas']; ?></td>
	<td><?php echo $fila['carrera']; ?></td>
	<td><?php echo $fila['materia']; ?></td>
	<td><?php echo $fila['cuatrimestre']; ?></td>
	
	

	<td class="text-center"><span class="btn btn-danger btn-raised btn-sm delete" id="del_<?php echo $fila['id_extra']; ?>"> <?php
	if ($fila['estado']=='aprobado')
	 { echo 'Concluido';
	}else{
	echo 'Pendiente';
		
	} ?></span></td>
	
	

	<td><?php echo $fila['estado']; ?></td>
	</tr>
	
	<?php
	if ($fila['estado']=='aprobado') {
		echo "<script>
			$('table td:last-child:contains(aprobado)').parents('tr').css('background-color', 'orange'); </script>";

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
 			console.log
 			$.ajax({
 				url: './funciones_php/extras/deletebd.php',
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


 
	




