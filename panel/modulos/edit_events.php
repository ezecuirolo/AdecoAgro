<?php
	include('../setup/config.php');

	$id = $_GET['id'];
?>
<section>
	<header>
		<h2>Events</h2>
	</header>

	<?php
		$consulta = <<<SQL
			SELECT
				*
			FROM
				events
			WHERE
				ID = '$id'
			LIMIT 1
SQL;

		$res = mysqli_query($conexion, $consulta);
		$fin = mysqli_fetch_assoc($res);
	?>

	<div class="content">
		<form action="actions/edit_events.php" method="post" enctype="multipart/form-data">
			<div>
				<label>Título:</label>
				<input type="text" name="titulo" value="<?php echo $fin['TITULO'] ?>">
			</div>

			<div>
				<label>Fecha:</label>
				<select name="anio">
					<option <?php if($fin['ANIO'] == date('Y')){ echo 'selected'; } ?>><?php echo date('Y') ?></option>
					<option <?php if($fin['ANIO'] == date('Y') + 1){ echo 'selected'; } ?>><?php echo date('Y') + 1 ?></option>
				</select>
				<select name="mes">
					<option <?php if($fin['MES'] == '01'){ echo 'selected'; } ?> value="01">January</option>
					<option <?php if($fin['MES'] == '02'){ echo 'selected'; } ?> value="02">February</option>
					<option <?php if($fin['MES'] == '03'){ echo 'selected'; } ?> value="03">March</option>
					<option <?php if($fin['MES'] == '04'){ echo 'selected'; } ?> value="04">April</option>
					<option <?php if($fin['MES'] == '05'){ echo 'selected'; } ?> value="05">May</option>
					<option <?php if($fin['MES'] == '06'){ echo 'selected'; } ?> value="06">June</option>
					<option <?php if($fin['MES'] == '07'){ echo 'selected'; } ?> value="07">July</option>
					<option <?php if($fin['MES'] == '08'){ echo 'selected'; } ?> value="08">August</option>
					<option <?php if($fin['MES'] == '09'){ echo 'selected'; } ?> value="09">September</option>
					<option <?php if($fin['MES'] == '10'){ echo 'selected'; } ?> value="10">October</option>
					<option <?php if($fin['MES'] == '11'){ echo 'selected'; } ?> value="11">November</option>
					<option <?php if($fin['MES'] == '12'){ echo 'selected'; } ?> value="12">December</option>
				</select>
				<select name="dia">
					<?php
						for($i = 01; $i < 32; $i++) {
					?>
							<option <?php if($fin['MES'] == $i){ echo 'selected'; } ?> value="<?php echo $i ?>"><?php echo $i ?></option>	
					<?php		
						}
					?>
				</select>
			</div>

			<div>
				<label>Copete:</label>
				<textarea name="copete" cols="15" rows="10"><?php echo $fin['COPETE'] ?></textarea>
			</div>

			<div>
				<label>Texto:</label>
				<textarea name="texto" cols="15" rows="10"><?php echo $fin['TEXTO'] ?></textarea>
			</div>

			<div>
				<label>Archivo:</label>
				<input type="file" name="archivo">

				<p>Archivo actual: <?php echo $fin['ARCHIVO'] ?></p>
			</div>

			<div>
				<label>Foto:</label>
				<input type="file" name="foto">
			</div>

			<input type="hidden" name="id" value="<?php echo $fin['ID'] ?>">
			<input type="submit" value="Editar">
		</form>

		<div>
			<p>Imagen actual</p>
			<img src="../uploads/<?php echo $fin['FOTO'] ?>">
		</div>
	</div>
</section>