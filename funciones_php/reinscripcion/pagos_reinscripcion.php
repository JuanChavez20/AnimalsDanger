<table class="table table-hover text-center">

	<thead>
	<tr>
	<th class="text-center">ID</th>
	<th class="text-center">Matricula</th>
	<th class="text-center">Email</th>
	<th class="text-center">Carrera</th>
	<th class="text-center">Cuatrimestre</th>
	<th class="text-center">No. Folio</th>
	
	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM  pagos ORDER BY id_student ASC";
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
	
	</tr>
	
	<?php
	
		
	}

	?>
 </tbody>
 </table>




 
	




