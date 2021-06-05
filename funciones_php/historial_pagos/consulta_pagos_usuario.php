
<table class="table table-hover text-center">
	
	<thead>
		<tr>
			<th class="text-center">No de pago</th>
			<th class="text-center">Concepto</th>
			<th class="text-center">Materia/Carrera</th>
			<th class="text-center">Cuatrimestre</th>
			<th class="text-center">Fecha</th>
			<th class="text-center">folio del boucher</th>
			
		</tr>
	</thead>
	<tbody>

		<?php
		$sql = "SELECT * FROM pagoscumplidos ORDER BY id_pago ASC";
		$query = $pdo->prepare($sql);
		$query->execute();
		$datos = $query->fetchAll();

		foreach ($datos as $fila ) {
		?>
			<tr>
				<td><?php echo $fila['id_pago']; ?></td>
				<td><?php echo $fila['concepto']; ?></td>
				<td><?php echo $fila['materia_carrera']; ?></td>
				<td><?php echo $fila['cuatrimestre']; ?></td>
				<td><?php echo $fila['fecha']; ?></td>
				<td><?php echo $fila['folio_boucher']; ?></td>

						
		</tr>;

		<?php	
		if ($fila['id_pago'] === 'inactivo') {
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

