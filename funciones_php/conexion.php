<?php
	// conexion con protocolo MYSQL

		$con = new mysqli("localhost", "root", "", "serv_esco_utom");

			if ($con->connect_errno)
			{
				echo"Fallo al conectar a MYSQL: (" . $con->connect_erno .") " . $con->connect_error;
				exit();

				
			}
			@mysqli_query($con, "SET NAMES 'utf8'");

?>