<?php
	include('../../setup/config.php');

	$titulo = $_POST['titulo'];
	$formato = $_POST['formato'];
	$anio = $_POST['anio'];
	$quarter = $_POST['quarter'];

	if(isset($_FILES['archivo'])){
		if($_FILES['archivo']['size'] > 0){
			$archivo = $_FILES['archivo']['tmp_name'];
			$nombre_archivo =  time() . '_' . $_FILES['archivo']['name'];
			move_uploaded_file($archivo, "../../uploads/$nombre_archivo");
		} else {
			$nombre_archivo = NULL;
		}
	}

	$consulta = " 
		INSERT INTO
			financials_quarters
		SET
			TITULO = '$titulo',
			ARCHIVO = '$nombre_archivo',
			FORMATO = '$formato',
			ANIO = '$anio',
			QUARTER = '$quarter'";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=financials&status=ok');
	}
?>