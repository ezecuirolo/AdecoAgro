<?php
	include('../setup/config.php');
?>
<section>
	<header>
		<h2>Header</h2>

		<a href="panel.php?s=header&action=edit">Edit <i class="fas fa-pencil-alt"></i></a>
	</header>

	<div class="content">
		<ul>
			<?php
				$consulta_header = <<<SQL
					SELECT
						*
					FROM
						header
					LIMIT 1
SQL;

				$rta_header = mysqli_query($conexion, $consulta_header);
				$content_header = mysqli_fetch_assoc($rta_header);
			?>
			<li>
				<h3>Title</h3>
				<p><?php echo $content_header['TITLE'] ?></p>
			</li>
			<li>
				<h3>Text</h3>
				<p><?php echo $content_header['TEXT'] ?></p>
			</li>
			<li>
				<h3>File 1</h3>
				<p><?php echo $content_header['TITLE_FILE_ONE'] ?></p>
			</li>
			<li>
				<h3>File 2</h3>
				<p><?php echo $content_header['TITLE_FILE_TWO'] ?></p>
			</li>
			<li>
				<h3>Background</h3>
				<img src="../uploads/<?php echo $content_header['FONDO'] ?>">
			</li>
		</ul>
	</div>
</section>