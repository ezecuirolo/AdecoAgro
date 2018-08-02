<?php
	include('../setup/config.php');

	$id = $_GET['id'];
?>
<section>
	<header>
		<h2>Financials</h2>
	</header>

	<?php
		$consulta = <<<SQL
			SELECT
				*
			FROM
				financials_quarters
			WHERE
				ID = '$id'
			LIMIT 1
SQL;

		$res = mysqli_query($conexion, $consulta);
		$fin = mysqli_fetch_assoc($res);
	?>

	<div class="content">
		<form action="actions/edit_financials.php" method="post" enctype="multipart/form-data">
			<div>
				<label>Título:</label>
				<input type="text" name="titulo" value="<?php echo $fin['TITULO'] ?>">
			</div>

			<div>
				<label>Archivo:</label>
				<input type="file" name="archivo">
				<p>Archivo actual: <?php echo $fin['ARCHIVO'] ?></p>
			</div>

			<div>
				<label>Formato:</label>
				<input type="text" name="formato" value="<?php echo $fin['FORMATO'] ?>">
			</div>

			<div>
				<label>Año:</label>
				<input type="text" name="anio" value="<?php echo $fin['ANIO'] ?>">
			</div>

			<div>
				<label>Quarter:</label>
				<select name="quarter">
					<option <?php if($fin['QUARTER'] == 'Q1'){ echo 'selected'; } ?>>Q1</option>
					<option <?php if($fin['QUARTER'] == 'Q2'){ echo 'selected'; } ?>>Q2</option>
					<option <?php if($fin['QUARTER'] == 'Q3'){ echo 'selected'; } ?>>Q3</option>
					<option <?php if($fin['QUARTER'] == 'Q4'){ echo 'selected'; } ?>>Q4</option>
				</select>
			</div>

			<input type="hidden" name="id" value="<?php echo $fin['ID'] ?>">
			<input type="submit" value="Editar">
		</form>
	</div>
</section>