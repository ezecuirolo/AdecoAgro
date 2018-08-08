<?php
	include('../../setup/config.php');

	$titulo = $_POST['titulo'];
	$anio = $_POST['anio'];
	$mes = $_POST['mes'];
	$dia = $_POST['dia'];
	$copete = $_POST['copete'];
	$texto = $_POST['texto'];

	if(isset($_FILES['archivo'])){
		if($_FILES['archivo']['size'] > 0){
			$archivo = $_FILES['archivo']['tmp_name'];
			$nombre_archivo =  time() . '_' . $_FILES['archivo']['name'];
			move_uploaded_file($archivo, "../../uploads/$nombre_archivo");
		} else {
			$nombre_archivo = NULL;
		}
	}

	if(isset($_FILES['foto'])){
		if($_FILES['foto']['size'] > 0){
			$foto = $_FILES['foto']['tmp_name'];
			$nombre_foto =  time() . '_' . $_FILES['foto']['name'];
			move_uploaded_file($foto, "../../uploads/$nombre_foto");
		} else {
			$nombre_foto = NULL;
		}
	}

	$fecha = $anio . '-' . $mes . '-' . $dia;

	$consulta = " 
		INSERT INTO
			events
		SET
			TITULO = '$titulo',
			ANIO = '$anio',
			MES = '$mes',
			DIA = '$dia',
			COPETE = '$copete',
			TEXTO = '$texto',
			ARCHIVO = '$nombre_archivo',
			FOTO = '$nombre_foto',
			FECHA = '$fecha'";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=events&status=ok');
	}