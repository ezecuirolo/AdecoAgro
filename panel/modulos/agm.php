<?php
	include('../setup/config.php');
?>
<section>
	<header>
		<h2>Annual General Meetings</h2>

		<a href="panel.php?s=agm&action=new">Nuevo <i class="fas fa-plus"></i></a>
	</header>

	<div class="content">
		<table cellspacing="0">
			<tr>
				<th>Título</th>
				<th>Documento</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
			<?php
				$consulta = <<<SQL
					SELECT
						*
					FROM
						agm
SQL;

				$filas = mysqli_query($conexion, $consulta);

				while($a = mysqli_fetch_assoc($filas)){
			?>
					<tr>
						<td><?php echo $a['TITULO'] ?></td>
						<td><a href="../uploads/<?php echo $a['DOCUMENTO'] ?>"><?php echo $a['DOCUMENTO']?></a></td>
						<td><a href="panel.php?s=agm&action=edit&id=<?php echo $a['ID'] ?>"><i class="fas fa-pencil-alt"></i></a></td>
						<td><a href="actions/delete_agm.php?id=<?php echo $a['ID'] ?>"><i class="fas fa-trash-alt"></i></a></td>
					</tr>
			<?php
				}
			?>
		</table>
	</div>
</section>