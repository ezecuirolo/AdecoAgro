<?php
	session_start();

	$db_username = 'root';
	$db_password = '';
	$db_name = 'adecoagro';
	$db_host = '127.0.0.1';

	$conexion = mysqli_connect($db_host, $db_username, $db_password, $db_name);

	if( $conexion ){
		mysqli_set_charset($conexion, 'utf8');
	}
?>
