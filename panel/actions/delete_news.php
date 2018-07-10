<?php 
	include('../../setup/config.php');

	$id = $_GET['id'];

	$consulta = "DELETE FROM newsroom WHERE ID = '$id'";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=news&status=ok');
	}
?>