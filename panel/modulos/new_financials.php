<section>
	<header>
		<h2>Financials</h2>
	</header>

	<div class="content">
		<form action="actions/new_financials.php" method="post" enctype="multipart/form-data">
			<div>
				<label>Título:</label>
				<input type="text" name="titulo">
			</div>

			<div>
				<label>Archivo:</label>
				<input type="file" name="archivo">
			</div>

			<div>
				<label>Formato:</label>
				<input type="text" name="formato">
			</div>

			<div>
				<label>Año:</label>
				<input type="text" name="anio">
			</div>

			<div>
				<label>Quarter:</label>
				<select name="quarter">
					<option>Q1</option>
					<option>Q2</option>
					<option>Q3</option>
					<option>Q4</option>
				</select>
			</div>

			<input type="submit" value="Agregar">
		</form>
	</div>
</section>