<?php 
	include('../../setup/config.php');

	$id = $_GET['id'];

	$consulta = "DELETE FROM agm WHERE ID = '$id'";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=agm&status=ok');
	}
?>