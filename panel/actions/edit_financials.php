<?php
	include('../../setup/config.php');

	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$formato = $_POST['formato'];
	$anio = $_POST['anio'];
	$quarter = $_POST['quarter'];

	$consulta = " 
		UPDATE
			financials_quarters
		SET
			TITULO = '$titulo',
			FORMATO = '$formato',
			ANIO = '$anio',
			QUARTER = '$quarter'";

			if(isset($_FILES['archivo'])){
				if($_FILES['archivo']['size'] > 0){
					$archivo = $_FILES['archivo']['tmp_name'];
					$nombre_archivo =  time() . '_' . $_FILES['archivo']['name'];
					move_uploaded_file($archivo, "../../uploads/$nombre_archivo");
					
					$consulta .= ", ARCHIVO = '$nombre_archivo'";
				}
			}

	$consulta .= " WHERE ID = $id";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=financials&status=ok');
	}
?>