<section>
	<header>
		<h2>Events</h2>
	</header>

	<div class="content">
		<form action="actions/new_events.php" method="post" enctype="multipart/form-data">
			<div>
				<label>Título:</label>
				<input type="text" name="titulo">
			</div>

			<div>
				<label>Fecha:</label>
				<select name="anio">
					<option><?php echo date('Y') ?></option>
					<option><?php echo date('Y') + 1 ?></option>
				</select>
				<select name="mes">
					<option value="01">January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April</option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<select name="dia">
					<?php
						for($i = 01; $i < 32; $i++) {
					?>
							<option value="<?php echo $i ?>"><?php echo $i ?></option>	
					<?php		
						}
					?>
				</select>
			</div>

			<div>
				<label>Copete:</label>
				<textarea name="copete" cols="15" rows="10"></textarea>
			</div>

			<div>
				<label>Texto:</label>
				<textarea name="texto" cols="15" rows="10"></textarea>
			</div>

			<div>
				<label>Archivo:</label>
				<input type="file" name="archivo">
			</div>

			<div>
				<label>Foto:</label>
				<input type="file" name="foto">
			</div>

			<input type="submit" value="Agregar">
		</form>
	</div>
</section>