

<table class="table table-hover text-center">

	<thead>
		<tr>
			
			<th class="text-center">Grado academico</th>
			<th class="text-center">Resultado</th>
		
		</tr>
	</thead>
	<tbody>

		<?php
	include('../conexion_bd.php');
		$pdo = connect();
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
		if ($fila['grado_academico'] === 'Rechazado') {
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