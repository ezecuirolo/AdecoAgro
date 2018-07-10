<section>
	<header>
		<h2>News</h2>
	</header>

	<div class="content">
		<form action="actions/new_news.php" method="post" enctype="multipart/form-data">
			<div>
				<label>Título:</label>
				<input type="text" name="titulo">
			</div>

			<div>
				<label>Copete:</label>
				<input type="text" name="copete">
			</div>

			<div>
				<label>Subtitulo:</label>
				<input type="text" name="subtitulo">
			</div>

			<div>
				<label>Foto:</label>
				<input type="file" name="foto">
			</div>

			<div>
				<label>Link:</label>
				<input type="text" name="link">
			</div>

			<div>
				<label>Texo:</label>
				<textarea name="texto" cols="15" rows="10"></textarea>
			</div>

			<input type="submit" value="Agregar">
		</form>
	</div>
</section>