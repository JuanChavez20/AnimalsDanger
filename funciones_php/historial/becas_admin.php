<table class="table table-hover text-center">

	<thead>
		<tr>
	
			<th class="text-center">Grado academico</th>
			<th class="text-center">Resultado</th>
<td><a href="./historialAcademico_imprimir.php" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy">Imprimir</i></a></td>
			<td><a href="historialAcademico_Admin.php" class="btn btn-info btn-raised btn-sm"><i class="">Regresar</i></a></td>
		
			
		</tr>
	</thead>
	<tbody>

		<?php
		$sql = "SELECT * FROM registro_ipes";
		
		$query = $pdo->prepare($sql);
		$query->execute();
		$datos = $query->fetchAll();

		foreach ($datos as $fila ) {
		?>
		<tr>
		<td><?php echo $fila['grado_academico']; ?></td>
		<td><?php echo $fila['estado']; ?></td>
		
		
		</tr>;
		<?php	
		if ($fila['estado'] === 'Rechazado') {
				echo "<script>
				$('table td:last-child:contains(Rechazado)')
				.parents('tr')
				.css('background-color','pink');
				</script>";
			}	
	   }
	?>
	</tbody>
</table>