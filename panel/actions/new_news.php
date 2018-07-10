<?php
	include('../../setup/config.php');

	$titulo = $_POST['titulo'];
	$copete = $_POST['copete'];
	$subtitulo = $_POST['subtitulo'];
	$link = $_POST['link'];
	$texto = $_POST['texto'];

	if(isset($_FILES['foto'])){
		if($_FILES['foto']['size'] > 0){
			$foto = $_FILES['foto']['tmp_name'];
			$nombre_foto =  time() . '_' . $_FILES['foto']['name'];
			move_uploaded_file($foto, "../../uploads/$nombre_foto");
		} else {
			$nombre_foto = NULL;
		}
	}

	$consulta = " 
		INSERT INTO
			newsroom
		SET
			TITULO = '$titulo',
			COPETE = '$copete',
			SUBTITULO = '$subtitulo',
			FOTO = '$nombre_foto',
			TEXTO = '$texto',
			FECHA = CURDATE(),
			LINK = '$link'";

	if(mysqli_query($conexion, $consulta)){
		header('Location: ../panel.php?s=news&status=ok');
	}
?>