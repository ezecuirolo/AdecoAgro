<?php
	// session_start();

	$db_username = 'root';
	$db_password = '';
	$db_name = 'adecoagro';
	$db_host = '127.0.0.1';

	/*$db_username = 'mirandaf';
	$db_password = 'Index45523275';
	$db_name = 'adeco_base';
	$db_host = '190.228.29.68';*/

	/*$db_username = 'centrala_index';
	$db_password = 'Index45523275';
	$db_name = 'centrala_adecoagro';
	$db_host = 'localhost';*/

	$conexion = mysqli_connect($db_host, $db_username, $db_password, $db_name);

	if( $conexion ){
		mysqli_set_charset($conexion, 'utf8');
	}
?>
