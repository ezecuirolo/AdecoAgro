<?php
	include('../setup/config.php');
?>
<section>
	<header>
		<h2>News</h2>
	</header>

	<?php
		$consulta_header = <<<SQL
			SELECT
				*
			FROM
				header
			WHERE ID = '1'
SQL;

		$rta_header = mysqli_query($conexion, $consulta_header);
		$content_header = mysqli_fetch_assoc($rta_header);
	?>

	<div class="content">
		<form action="actions/edit_header.php" method="post" enctype="multipart/form-data">
			<div>
				<label>Title:</label>
				<input type="text" name="titulo" value="<?php echo $content_header['TITLE'] ?>">
			</div>

			<div>
				<label>Text:</label>
				<textarea name="texto" cols="15" rows="10"><?php echo $content_header['TEXT'] ?></textarea>
			</div>

			<div>
				<label>Title File 1:</label>
				<input type="text" name="titulo_file_one" value="<?php echo $content_header['TITLE_FILE_ONE'] ?>">
			</div>

			<div>
				<label>File 1:</label>
				<p>Actual: <?php echo $content_header['FILE_ONE'] ?></p>
				<input type="file" name="file_one">
			</div>

			<div>
				<label>Title File 2:</label>
				<input type="text" name="titulo_file_two" value="<?php echo $content_header['TITLE_FILE_TWO'] ?>">
			</div>

			<div>
				<label>File 2:</label>
				<p>Actual: <?php echo $content_header['FILE_ONE'] ?></p>
				<input type="file" name="file_two">
			</div>

			<div>
				<label>Background:</label>
				<input type="file" name="fondo">
				<p>Actual:</p>
				<img src="../uploads/<?php echo $content_header['FONDO'] ?>">
			</div>

			<input type="hidden" name="id" value="<?php echo $content_header['ID'] ?>">
			<input type="submit" value="Edit">
		</form>
	</div>
</section>