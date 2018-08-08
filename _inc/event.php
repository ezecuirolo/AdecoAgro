<?php
	include('setup/config.php');

	$id = $_GET['id'];

?>
<div id="event">		
	<section class="content">
		<div class="container">
			<?php
				$consulta_evento = " 
					SELECT
						*
					FROM
						events
					WHERE
						ID = $id
					LIMIT 1";

				$este_evento = mysqli_query($conexion, $consulta_evento);
				$datos = mysqli_fetch_assoc($este_evento);

				$meses = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Diciembre'];


				for($i = 0; $i < count($meses); $i++){
					if($i + 1 == $datos['MES']){
			?>
						<h4><?php echo $meses[$i] . ' ' . $datos['DIA'] . ', ' . $datos['ANIO'] ?></h4>
			<?php
					}
				}
			?>
			<h3 class="h3 bd-font alt-green1"><?php echo $datos['TITULO'] ?></h3>
			<p class="txt-bold"><?php echo $datos['COPETE'] ?></p>
			<img src="uploads/<?php echo $datos['FOTO'] ?>">
			<p><?php echo nl2br($datos['TEXTO']) ?></p>
			<a class="download alt-green2" href="uploads/<?php echo $datos['ARCHIVO'] ?>" target_blank><i class="far fa-calendar-alt"></i> Download .ICS</a>
			<div class="clearfix">&nbsp;</div>
		</div>
	</section>
</div>
