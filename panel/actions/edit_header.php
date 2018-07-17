<?php
	include('../../setup/config.php');

	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$titulo_file_one = $_POST['titulo_file_one'];
	$titulo_file_two = $_POST['titulo_file_two'];
	$texto = $_POST['texto'];

	$consulta = " 
		UPDATE
			header
		SET
			TITLE = '$titulo'";

			if(isset($_FILES['file_one'])){
				if($_FILES['file_one']['size'] > 0){
					$file_one = $_FILES['file_one']['tmp_name'];
					$nombre_file_one =  time() . '_' . $_FILES['file_one']['name'];
					move_uploaded_file($file_one, "../../uploads/$nombre_file_one");
					
					$consulta .= ", FILE_ONE = '$nombre_file_one'";
				}
			}

			if(isset($_FILES['file_two'])){
				if($_FILES['file_two']['size'] > 0){
					$file_two = $_FILES['file_two']['tmp_name'];
					$nombre_file_two =  time() . '_' . $_FILES['file_two']['name'];
					move_uploaded_file($file_two, "../../uploads/$nombre_file_two");
					
					$consulta .= ", FILE_TWO = '$nombre_file_two'";
				}
			}

			if(isset($_FILES['fondo'])){
				if($_FILES['fondo']['size'] > 0){
					$fondo = $_FILES['fondo']['tmp_name'];
					$nombre_fondo =  time() . '_' . $_FILES['fondo']['name'];
					move_uploaded_file($fondo, "../../uploads/$nombre_fondo");
					
					$consulta .= ", FONDO = '$nombre_fondo'";
				}
			}

			$consulta .= ", TEXT = '$texto',
							TITLE_FILE_ONE = '$titulo_file_one',
							TITLE_FILE_TWO = '$titulo_file_two'
						WHERE ID = '$id'";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=header&status=ok');
	} else {
		echo mysqli_error($conexion);
	}
?>