<?php
	include('../setup/config.php');
?>
<section>
	<header>
		<h2>Noticias</h2>

		<a href="panel.php?s=events&action=new">Nuevo <i class="fas fa-plus"></i></a>
	</header>

	<div class="content">
		<table cellspacing="0">
			<tr>
				<th>Título</th>
				<th>Copete</th>
				<th>Texto</th>
				<th>Archivo</th>
				<th>Fecha</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
			<?php
				$consulta = <<<SQL
					SELECT
						*
					FROM
						events
SQL;

				$filas = mysqli_query($conexion, $consulta);

				while($a = mysqli_fetch_assoc($filas)){
			?>
					<tr>
						<td><?php echo substr($a['TITULO'], 0, 100) ?></td>
						<td><?php echo substr($a['COPETE'], 0, 100) ?></td>
						<td><?php echo substr($a['TEXTO'], 0, 100) ?></td>
						<td><a href="<?php echo $a['ARCHIVO'] ?>" target="_blank" download><?php echo $a['ARCHIVO'] ?></a></td>
						<td><?php echo $a['FECHA'] ?></td>
						<td><a href="panel.php?s=events&action=edit&id=<?php echo $a['ID'] ?>"><i class="fas fa-pencil-alt"></i></a></td>
						<td><a href="actions/delete_events.php?id=<?php echo $a['ID'] ?>"><i class="fas fa-trash-alt"></i></a></td>
					</tr>
			<?php
				}
			?>
		</table>
	</div>
</section>