<?php
	include('../../setup/config.php');

	$titulo = $_POST['titulo'];

	if(isset($_FILES['documento'])){
		if($_FILES['documento']['size'] > 0){
			$documento = $_FILES['documento']['tmp_name'];
			$nombre_documento =  time() . '_' . $_FILES['documento']['name'];
			move_uploaded_file($documento, "../../uploads/$nombre_documento");
		} else {
			$nombre_documento = NULL;
		}
	}

	$consulta = " 
		INSERT INTO
			agm
		SET
			TITULO = '$titulo',
			DOCUMENTO = '$nombre_documento'";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=agm&status=ok');
	}
?>