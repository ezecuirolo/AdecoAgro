<?php
	include('../setup/config.php');

	$id = $_GET['id'];
?>
<section>
	<header>
		<h2>Annual General Meetings</h2>
	</header>

	<?php
		$consulta = <<<SQL
			SELECT
				*
			FROM
				agm
			WHERE
				ID = '$id'
			LIMIT 1
SQL;

		$res = mysqli_query($conexion, $consulta);
		$fin = mysqli_fetch_assoc($res);
	?>

	<div class="content">
		<form action="actions/edit_agm.php" method="post" enctype="multipart/form-data">
			<div>
				<label>Título:</label>
				<input type="text" name="titulo" value="<?php echo $fin['TITULO'] ?>">
			</div>

			<div>
				<label>Documento:</label>
				<input type="file" name="documento">
				<p>Documento actual: <?php echo $fin['DOCUMENTO'] ?></p>
			</div>

			<input type="hidden" name="id" value="<?php echo $fin['ID'] ?>">
			<input type="submit" value="Editar">
		</form>
	</div>
</section>