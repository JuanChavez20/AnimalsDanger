

<table class="table table-hover text-center">

	<thead>
		<tr>
			<th class="text-center">Nombre Taller</th>
			<th class="text-center">Estado</th>
		</tr>
	</thead>
	<tbody>

		<?php
		
		$sql = "SELECT * FROM talleres";

		
		$query = $pdo->prepare($sql);
		$query->execute();
		$datos = $query->fetchAll();

		foreach ($datos as $fila ) {
		?>
		<tr>
		<td><?php echo $fila['taller']; ?></td>
		<td><?php echo $fila['estado']; ?></td>
	
		
	</tr>;
	 <?php	
		if ($fila['taller'] === 'inactivo') {
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