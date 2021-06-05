<?php
	session_start();
	if(!$_SESSION){
		header('Location:index.php');
	}
?>
<table class="table table-hover text-center">

	<thead>
	<tr>
	<th class="text-center">id_Estudiantes</th>
	<th class="text-center">Nombre</th>
	<th class="text-center">Telefono</th>
	<th class="text-center">taller</th>
	<th class="text-center">estado</th>
	<th class="text-center">Carrera </th>
	
	<th class="text-center">Desabilitar/Habilitar</th>
	
	
	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM  talleres ORDER BY id_taller ASC";
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {
		
	?>

	<tr>
	<td><?php echo $fila['id_taller']; ?></td>
	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['telefono']; ?></td>
	<td><?php echo $fila['taller']; ?></td>
	<td><?php echo $fila['estado']; ?></td>
	<td><?php echo $fila['carreracuatrimestre']; ?></td>
	
	

	<td class="text-center"><span class="btn btn-danger btn-raised btn-sm delete" id="del_<?php echo $fila['id_taller']; ?>"> <?php
	if ($fila['estado']=='inactivo')
	 
	 { echo 'Habilitar';
	
	}else{
	echo 'Desabilitar';
		
	} ?></span></td>
	
	

	<td> <?php echo $fila['estado']; 
	?></td>
	</tr>
	
	<?php
	if ($fila['estado']=='inactivo') {
		echo "<script>
			$('table td:last-child:contains(inactivo)').parents('tr').css('background-color', 'pink'); </script>";

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

 			console.log("hhjghjhjh");

 			$.ajax({
 				url: './funciones_php/talleres/deletebd.php',
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


 
	




