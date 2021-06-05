

<p class="lead">Calificaciones</p>
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

		
	 	$pdo = conectar();

		
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




<p class="lead">Actividades</p>
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



<p class="lead">Becas</p>
<table class="table table-hover text-center">

	<thead>
		<tr>
	
			<th class="text-center">Grado academico</th>
			<th class="text-center">Resultado</th>

		
			
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



<p class="lead">Estancias y Estadias</p>
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


<p class="lead">Servicio Social</p>
<table class="table table-hover text-center">

	<thead>
		<tr>
			<th class="text-center">Servicio social</th>
			<th class="text-center">Proyecto servicio</th>

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