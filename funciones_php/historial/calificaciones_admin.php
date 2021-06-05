<table class="table table-hover text-center">

	<thead>
		<tr>
			<th class="text-center">Asignatura</th>
			<th class="text-center">Calificación</th>
			<th class="text-center">Competencia</th>
			<th class="text-center">Última Asignatura</th>
<td><a href="./historialAcademico_imprimir.php" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy">Imprimir</i></a></td>
			<td><a href="historialAcademico_Admin.php" class="btn btn-info btn-raised btn-sm"><i class="">Regresar</i></a></td>
		</tr>
	</thead>
	<tbody>

		<?php
		$sql = "SELECT * FROM consultar";
		if (isset($_POST['consulta']) ) {
			$valor = $_POST['consulta'];

			$sql="SELECT * FROM consultar WHERE
			 materia LIKE '%".$valor."%' OR 
			calificacion LIKE '%".$valor."%' OR 
			competencia LIKE '%".$valor."%' OR
			estado LIKE '%".$valor."%' ";
		};

		
	 	$pdo = connect();

		
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
