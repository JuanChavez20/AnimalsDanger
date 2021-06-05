
<table class="table table-hover text-center">

	<thead>
	<tr>
	<th class="text-center">id_Student</th>
	<th class="text-center">Nombre</th>
	<th class="text-center">Materia</th>
	<th class="text-center">Calificacion</th>
	<th class="text-center">Competencia</th>
	
	
	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM  consultar WHERE nombre='JAVIER MORA PERDOMO' ";
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {
		
	?>

	<tr>
	<td><?php echo $fila['id_student']; ?></td>
	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['materia']; ?></td>
	<td><?php echo $fila['calificacion']; ?></td>
	<td><?php echo $fila['competencia']; ?></td>
	
	

	

	
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
 				url: './funciones_php/consulta_calificaciones/deletebd.php',
 				type: 'post',
 				data: {id: id_listo},
 				success: function(respuesta){
 					if (respuesta == 1) {
 					$(boton).closest('tr').css('background', 'orange');
 					location.reload();
 				}


 				else{
 					alert('imposible hacer el combio!');

 				}

 				}
 				
 			});
 				});
 			});

 		

</script>


 
	




