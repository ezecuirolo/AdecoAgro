<?php
	include('../setup/config.php');

	$id = $_GET['id'];
?>
<section>
	<header>
		<h2>News</h2>
	</header>

	<?php
		$consulta = <<<SQL
			SELECT
				*
			FROM
				newsroom
			WHERE
				ID = '$id'
			LIMIT 1
SQL;

		$res = mysqli_query($conexion, $consulta);
		$fin = mysqli_fetch_assoc($res);
	?>

	<div class="content">
		<form action="actions/edit_news.php" method="post" enctype="multipart/form-data">
			<div>
				<label>Título:</label>
				<input type="text" name="titulo" value="<?php echo $fin['TITULO'] ?>">
			</div>

			<div>
				<label>Copete:</label>
				<input type="text" name="copete" value="<?php echo $fin['COPETE'] ?>">
			</div>

			<div>
				<label>Subtitulo:</label>
				<input type="text" name="subtitulo" value="<?php echo $fin['SUBTITULO'] ?>">
			</div>

			<div>
				<label>Foto:</label>
				<input type="file" name="foto">
			</div>

			<div>
				<label>Link:</label>
				<input type="text" name="link" value="<?php echo $fin['LINK'] ?>">
			</div>

			<div>
				<label>Texto:</label>
				<textarea name="texto" cols="15" rows="10"><?php echo $fin['TEXTO'] ?></textarea>
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