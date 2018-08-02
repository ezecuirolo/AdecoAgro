<?php 
	include('../../setup/config.php');

	$id = $_GET['id'];

	$consulta = "DELETE FROM financials_quarters WHERE ID = '$id'";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=financials&status=ok');
	}
?>