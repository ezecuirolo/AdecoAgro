<?php
	include('../setup/config.php');

	$consulta = <<<SQL
		SELECT
			*
		FROM
			events
		WHERE
			MES = MONTH(CURDATE()) OR MES = (MONTH(CURDATE()) + 1) OR MES = (MONTH(CURDATE()) + 2)
		ORDER BY MES
SQL;

	$filas = mysqli_query($conexion, $consulta);
	$array_eventos = array();

	while($array_filas = mysqli_fetch_assoc($filas)){
		array_push($array_eventos, $array_filas);
	}

	print json_encode($array_eventos);
	