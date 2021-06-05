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
	<th class="text-center">Nombre</th>
	<th class="text-center">Apellido Paterno</th>
	<th class="text-center">Apellido Materno</th>
	<th class="text-center">Direccion</th>
	<th class="text-center">Telefono</th>
	<th class="text-center">Correo</th>
	<th class="text-center">Sexo</th>
	<th class="text-center">Especialidad</th>
	
	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM registro_maestros ORDER BY id_maestro ASC LIMIT 10";
	if (isset($_POST['consulta']) ) {
		$valor = $_POST['consulta'];

		$sql ="SELECT * FROM registro_maestros WHERE id_maestro LIKE '%".$valor."%' OR nombre LIKE '%".$valor."%' OR apellido_p LIKE '%".$valor."%' or apellido_m LIKE '%".$valor."%' ";
	}


    include('../conexion_bd.php');
	$pdo = connect();	
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {
		
	?>

	<tr>
	<td><?php echo $fila['id_maestro']; ?></td>
	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['apellido_p']; ?></td>
	<td><?php echo $fila['apellido_m']; ?></td>
	<td><?php echo $fila['direccion']; ?></td>
	<td><?php echo $fila['telefono']; ?></td>
	<td><?php echo $fila['correo']; ?></td>
	<td><?php echo $fila['sexo']; ?></td>
	<td><?php echo $fila['especialidad']; ?></td>
	
	<td><a href="#!"  data-target="#editMaestroModal" data-toggle="modal" class="edit" data-idd='<?php echo $fila['id_maestro']; ?>' data-namee='<?php echo $fila['nombre']; ?>' data-apellp='<?php echo $fila['apellido_p']; ?>' data-apllm='<?php echo $fila['apellido_m']; ?>' data-dire='<?php echo $fila['direccion']; ?>' data-tel='<?php echo $fila['telefono']; ?>' data-corre='<?php echo $fila['correo']; ?>' data-sex='<?php echo $fila['sexo']; ?>' data-especi='<?php echo $fila['especialidad']; ?>'><i class="btn btn-info btn-raised btn-sm"  title="Update"> Editar</i></a></td>

	<td class="text-center"><span class="btn btn-danger btn-raised btn-sm delete" id="del_<?php echo $fila['id_maestro']; ?>"> <?php
	
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
 				url: './funciones_php/control_info/deletebdinfoMaestros.php',
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