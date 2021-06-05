

<table class="table table-hover text-center">

	<thead>
	<tr>
	
	<th class="text-center">ID_Empresa</th>
	<th class="text-center">Nombre Empresa</th>
	
	<th class="text-center">Telefono</th>
	<th class="text-center">Correo</th>
	<th class="text-center">Direcciòn</th>
	<th class="text-center">Actualizar</th>

	<th class="text-center">Vincular/Desvicular</th>
	
	<th class="text-center">Estado</th>
	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM  empresas_vinculadas ORDER BY id_empresa ASC LIMIT 10";
	
	

	if(isset($_POST['consulta']) ){
		$valor = $_POST['consulta'];

		$sql = "SELECT * FROM empresas_vinculadas WHERE
		 id_empresa LIKE '%".$valor."%'  OR 
		 nombre LIKE '%".$valor."%' ";

	}

	include('../conexion_bd.php');
	$pdo = connect();

	$pdo = connect();
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {



	
		
	?>
	<tr>
	

	<td><?php echo $fila['id_empresa']; ?></td>
	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['telefono']; ?></td>
	<td><?php echo $fila['correo']; ?></td>
	<td><?php echo $fila['direccion']; ?></td>
	<td><a href="#!"  data-target="#editEmpresaModal" data-toggle="modal" class="edit" data-idd='<?php echo $fila['id_empresa']; ?>' data-namee='<?php echo $fila['nombre']; ?>' data-tell='<?php echo $fila['telefono']; ?>' data-correoo='<?php echo $fila['correo']; ?>' data-direc='<?php echo $fila['direccion']; ?>'><i class="btn btn-info btn-raised btn-sm"  title="Update"> Editar</i></a></td>

	<td class="text-center"><span class="btn btn-danger btn-raised btn-sm delete" id="del_<?php echo $fila['id_empresa']; ?>"> <?php
	if ($fila['estado']=='desvinculado')
	 { echo 'Habilitar';
	}else{
	echo 'Desabilitar';
	
		
	} ?></span></td>
	
	

	<td><?php echo $fila['estado']; ?></td>
	</tr>
	
	<?php
	if ($fila['estado']=='desvinculado') {
		echo "<script>
			$('table td:last-child:contains(desvinculado)').parents('tr').css('background-color', 'pink'); </script>";

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
 				url: './funciones_php/deleteempresasbd.php',
 				type: 'post',
 				data: {id: id_listo},
 				success: function(respuesta){
 					if (respuesta == 1) {
 					$(boton).closest('tr').css('background', 'pink');
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



<!-- <script>
 	$(document).ready(function(){
 		$('.eliminar').click(function(){
 			var boton = this;
 			var id_stu = this.id;
 			var solo_id =id_stu.split("_");
 			var id_listo = solo_id[1];

 			$.ajax({
 				url: './funciones_php/eliminarbd.php',
 				type: 'post',
 				data: {id: id_listo},
 				success: function(respuesta){
 					if (respuesta == 1) {
 					$(boton).closest('tr').css('background', 'pink');
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
 -->


 
	




