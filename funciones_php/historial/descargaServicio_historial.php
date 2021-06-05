

<table class="table table-hover text-center">

	<thead>
		<tr>
			<th class="text-center">Servicio social</th>
			<th class="text-center">Proyecto servicio</th>
		</tr>
	</thead>
	<tbody>

		<?php
		include('../conexion_bd.php');
		$pdo = connect();
		$sql = "SELECT * FROM control_tsu";
		$query = $pdo->prepare($sql);
		$query->execute();
		$datos = $query->fetchAll();

		foreach ($datos as $fila ) {
		?>
		<tr>
		<td><?php echo $fila['servicio_social']; ?></td>
		<td><?php echo $fila['proyecto_servicios']; ?></td>
		
		
	</tr>;
	 <?php	
		if ($fila['servicio_social'] === 'inactivo') {
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