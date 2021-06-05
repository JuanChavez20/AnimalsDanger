

<table class="table table-hover text-center">

	<thead>
	<tr>
	<th class="text-center">ID</th>
	<th class="text-center">Matricula</th>
	<th class="text-center">Email</th>
	<th class="text-center">Carrera</th>
	<th class="text-center">Cuatrimestre</th>
	<th class="text-center">No. Folio</th>
	<th class="text-center">Update</th>
	<th class="text-center">Desabilitar/Habilitar</th>
	
	<th class="text-center">Estado</th>
	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM  reinscripcion ORDER BY id_student ASC";
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {
		
	?>

	<tr>
	<td><?php echo $fila['id_student']; ?></td>
	<td><?php echo $fila['matricula']; ?></td>
	<td><?php echo $fila['email']; ?></td>
	<td><?php echo $fila['carrera']; ?></td>
	<td><?php echo $fila['cuatrimestre']; ?></td>
	<td><?php echo $fila['no_folio']; ?></td>
	
	<td><a href="#!"  data-target="#editAlumnoModal" data-toggle="modal" class="edit" data-idd='<?php echo $fila['id_student']; ?>' data-matri='<?php echo $fila['matricula']; ?>' data-correoo='<?php echo $fila['email']; ?>' data-carre='<?php echo $fila['carrera']; ?>' data-cua='<?php echo $fila['cuatrimestre']; ?>' data-fol='<?php echo $fila['no_folio']; ?>'><i class="btn btn-info btn-raised btn-sm"  title="Update"> Editar </i></a></td>

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
 				url: './funciones_php/reinscripcion/deletebd.php',
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


 
	




