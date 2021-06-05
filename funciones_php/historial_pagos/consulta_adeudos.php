<table class="table table-hover text-center">
	
	<thead>
		<tr>
			<th class="text-center">No de pago</th>
			<th class="text-center">Concepo</th>
			<th class="text-center">Carrera</th>
			<th class="text-center">Cuatrimestre</th>
			<th class="text-center">Fecha</th>
			<th class="text-center">Cantidad</th>

		</tr>
	</thead>
	<tbody>

		<?php
		$sql = "SELECT * FROM registroadmin ORDER BY id_admin ASC";
		$query = $pdo->prepare($sql);
		$query->execute();
		$datos = $query->fetchAll();

		foreach ($datos as $fila ) {
		?>
			<tr>
				<td><?php echo $fila['id_admin']; ?></td>
				<td><?php echo $fila['concepto']; ?></td>
				<td><?php echo $fila['carrera']; ?></td>
				<td><?php echo $fila['cuatrimestre']; ?></td>
				<td><?php echo $fila['fecha']; ?></td>
				<td><?php echo $fila['cantidad']; ?></td>
			
						
		</tr>;

		<?php	
		if ($fila['id_admin'] === 'inactivo') {
				echo "<script>
				$('table td:last-child:contains(inactivo)')
				.parents('tr')
				.css('background-color','pink');
				</script>";
			}	
	   }
	?>
</tbody>
</table>
