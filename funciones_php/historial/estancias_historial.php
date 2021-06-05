

<table class="table table-hover text-center">

	<thead>
		<tr>
			<th class="text-center">Esatancias estadias</th>
			
			<th class="text-center">Proyecto estadias</th>
			
		</tr>
	</thead>
	<tbody>

		<?php
		$sql = "SELECT * FROM control_tsu";
		
		$query = $pdo->prepare($sql);
		$query->execute();
		$datos = $query->fetchAll();

		foreach ($datos as $fila ) {
		?>
		<tr>
		<td><?php echo $fila['estancias_estadias']; ?></td>
		
		<td><?php echo $fila['proyecto_estadias']; ?></td>
		
	</tr>;
	 <?php	
		if ($fila['estancias_estadias'] === 'inactivo') {
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