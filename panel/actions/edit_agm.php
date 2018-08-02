<?php
	include('../../setup/config.php');

	$id = $_POST['id'];
	$titulo = $_POST['titulo'];

	$consulta = " 
		UPDATE
			agm
		SET
			TITULO = '$titulo'";

			if(isset($_FILES['documento'])){
				if($_FILES['documento']['size'] > 0){
					$documento = $_FILES['documento']['tmp_name'];
					$nombre_documento =  time() . '_' . $_FILES['documento']['name'];
					move_uploaded_file($documento, "../../uploads/$nombre_documento");
					
					$consulta .= ", DOCUMENTO = '$nombre_documento'";
				}
			}

	$consulta .= "WHERE ID = $id";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=agm&status=ok');
	}
?>