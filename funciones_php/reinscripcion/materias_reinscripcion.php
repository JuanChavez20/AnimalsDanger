<table class="table table-hover text-center">

	<thead>
	<tr>
	<th class="text-center">Cuatrimestre</th>
	<th class="text-center">Materia</th>
	<th class="text-center">Maestro</th>
	<th class="text-center">Carrera</th>
	

	</tr>
	</thead>
	<tbody>
	<?php  
	$sql = "SELECT * FROM materias ORDER BY id_materias, carrera ASC";
	$query = $pdo->prepare($sql);
	$query->execute();
	$datos= $query->fetchAll();
	foreach ($datos as $fila) {
		
	?>

	<tr>
	<td><?php echo $fila['id_materias']; ?></td>
	<td><?php echo $fila['materia']; ?></td>
	<td><?php echo $fila['maestro']; ?></td>
	<td><?php echo $fila['carrera']; ?></td>

	
	</tr>
	
	<?php
	
		
	}

	?>
 </tbody>
 </table>
