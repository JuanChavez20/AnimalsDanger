<?php
	

	function connect(){
		$host = 'localhost';
		$username = "root";
		$password = "";
		$database ="serv_esco_utom";
	

	return new PDO( 'mysql:host='.$host.';dbname='.$database, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO:: MYSQL_ATTR_INIT_COMMAND  => "SET NAMES utf8"));
  
			
	}

?>

