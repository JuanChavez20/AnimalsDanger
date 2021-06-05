<table class="table table-hover text-center">

	<thead>
		<tr>
			<th class="text-center">Servicio social</th>
			<th class="text-center">Proyecto servicio</th>
<td><a href="./historialAcademico_imprimir.php" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy">Imprimir</i></a></td>
			<td><a href="historialAcademico_Admin.php" class="btn btn-info btn-raised btn-sm"><i class="">Regresar</i></a></td>
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