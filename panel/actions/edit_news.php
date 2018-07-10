<?php
	include('../../setup/config.php');

	$id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$copete = $_POST['copete'];
	$subtitulo = $_POST['subtitulo'];
	$link = $_POST['link'];
	$texto = $_POST['texto'];

	$consulta = " 
		UPDATE
			newsroom
		SET
			TITULO = '$titulo',
			COPETE = '$copete',
			SUBTITULO = '$subtitulo'";

			if(isset($_FILES['foto'])){
				if($_FILES['foto']['size'] > 0){
					$foto = $_FILES['foto']['tmp_name'];
					$nombre_foto =  time() . '_' . $_FILES['foto']['name'];
					move_uploaded_file($foto, "../../uploads/$nombre_foto");
					
					$consulta .= ", FOTO = '$nombre_foto'";
				}
			}

			$consulta .= ", TEXTO = '$texto',
							LINK = '$link'
						WHERE ID = '$id'";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=news&status=ok');
	}
?>