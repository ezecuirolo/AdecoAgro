<section>
	<header>
		<h2>Annual General Meetings</h2>
	</header>

	<div class="content">
		<form action="actions/new_agm.php" method="post" enctype="multipart/form-data">
			<div>
				<label>Título:</label>
				<input type="text" name="titulo">
			</div>

			<div>
				<label>Documento:</label>
				<input type="file" name="documento">
			</div>

			<input type="submit" value="Agregar">
		</form>
	</div>
</section>