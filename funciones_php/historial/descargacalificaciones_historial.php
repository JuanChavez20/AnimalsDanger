

<table class="table table-hover text-center">

	<thead>
		<tr>
			<th class="text-center">Asignatura</th>
			<th class="text-center">Calificación</th>
			<th class="text-center">Competencia</th>
			<th class="text-center">Última Asignatura</th>
		</tr>
	</thead>
	<tbody>

		<?php
		include('../conexion_bd.php');
		$pdo = connect();
		$sql = "SELECT * FROM consultar";
		$query = $pdo->prepare($sql);
		$query->execute();
		$datos = $query->fetchAll();

		foreach ($datos as $fila ) {
		?>
		<tr>
		<td><?php echo $fila['materia']; ?></td>
		<td><?php echo $fila['calificacion']; ?></td>
		<td><?php echo $fila['competencia']; ?></td>
		<td><?php echo $fila['estado']; ?></td>
		
	</tr>;
	 <?php	
		if ($fila['materia'] === 'inactivo') {
			  echo "<script>
			  		$('table td:last-child:contains(inactivo)')
			  			.parents('tr')
			  			.css('background-color','orange');
			  			</script>";
	   }
	}
	?>
	</tbody>
</table>