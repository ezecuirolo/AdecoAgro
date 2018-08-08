<?php
	include('setup/config.php');
	
	$month = date("n");
	$year = date("Y");
	$diaActual = date("j");

	$diaSemana = date("w", mktime(0, 0, 0, $month, 1, $year)) + 7;
	$ultimoDiaMes = date("d", (mktime(0, 0, 0, $month + 1, 1, $year) - 1));

	$diaSemanaSiguiente = date("w", mktime(0, 0, 0, $month + 1, 1, $year)) + 7;
	$ultimoDiaMesSiguiente = date("d", (mktime(0, 0, 0, $month + 2, 1, $year) - 1));

	$diaSemanaTercero = date("w", mktime(0, 0, 0, $month + 2, 1, $year)) + 7;
	$ultimoDiaMesTercero = date("d", (mktime(0, 0, 0, $month + 4, 1, $year) - 1));

	$meses = array(1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
?>
<div id="events">	
	<section id="calendar">
		<div class="container">
			<h3 class="h3 bd-font grey4">Events</h3>
			<div class="row">
				<div class="col-lg-4 text-center" id="<?php echo $month ?>">
					<div class="jzdbox1 jzdbasf jzdcal desktop-only">
						<div class="jzdcalt id-green"><?php echo $meses[$month] . " " . $year ?></div>

						<span class="day">Su</span>
						<span class="day">Mo</span>
						<span class="day">Tu</span>
						<span class="day">We</span>
						<span class="day">Th</span>
						<span class="day">Fr</span>
						<span class="day">Sa</span>

						<?php

							$last_cell = $diaSemana + $ultimoDiaMes;

							for($i = 1; $i <= 42; $i++) {
								
								if($i == $diaSemana) {
									$day=1;
								}

								if($i < $diaSemana || $i >= $last_cell) {
									echo "<span class='jzdb'>&nbsp;</span>";
								} else {
									echo "<span>$day</span>";
									
									$day++;
								}
							}
						?>
					</div>
				</div>
				<div class="col-lg-4 text-center" id="<?php echo $month + 1 ?>">
					<div class="jzdbox1 jzdbasf jzdcal desktop-only">
						<div class="jzdcalt id-green"><?php echo $meses[$month + 1]." ".$year?></div>

						<span class="day">Su</span>
						<span class="day">Mo</span>
						<span class="day">Tu</span>
						<span class="day">We</span>
						<span class="day">Th</span>
						<span class="day">Fr</span>
						<span class="day">Sa</span>

						<?php
							$last_cell = $diaSemanaSiguiente + $ultimoDiaMesSiguiente;

							for($i = 1; $i <= 42; $i++) {
								
								if($i == $diaSemanaSiguiente) {
									$day=1;
								}

								if($i < $diaSemanaSiguiente || $i >= $last_cell) {
									echo "<span class='jzdb'>&nbsp;</span>";
								} else {
									echo "<span>$day</span>";
									
									$day++;
								}
							}
						?>
					</div>
				</div>
				<div class="col-lg-4 text-center" id="<?php echo $month + 2 ?>">
					<div class="jzdbox1 jzdbasf jzdcal desktop-only">
						<div class="jzdcalt id-green"><?php echo $meses[$month + 2]." ".$year?></div>

						<span class="day">Su</span>
						<span class="day">Mo</span>
						<span class="day">Tu</span>
						<span class="day">We</span>
						<span class="day">Th</span>
						<span class="day">Fr</span>
						<span class="day">Sa</span>

						<?php
							$last_cell = $diaSemanaTercero + $ultimoDiaMesTercero;

							for($i = 1; $i <= 42; $i++) {
								
								if($i == $diaSemanaTercero) {
									$day=1;
								}

								if($i < $diaSemanaTercero || $i >= $last_cell) {
									echo "<span class='jzdb'>&nbsp;</span>";
								} else {
									echo "<span>$day</span>";
									
									$day++;
								}
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section id="upcoming">
		<div class="container">
			<h3 class="h3 bd-font grey4">Upcoming events</h3>
			<?php
				$consulta_proximo_evento = <<<SQL
					SELECT
						*
					FROM
						events
					WHERE
						FECHA >= NOW()
					ORDER BY FECHA 
					LIMIT 1
SQL;
				$filas_events = mysqli_query($conexion, $consulta_proximo_evento);
				$a_events = mysqli_fetch_assoc($filas_events);

				$meses_abreviados = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];


			?>
			<a href="index.php?s=event&id=<?php echo $a_events['ID'] ?>" class="event">
				<?php
					for($i = 0; $i < count($meses); $i++){
						if($i + 1 == $a_events['MES']){
				?>
							<h4 class="id-green"><?php echo $meses_abreviados[$i] . ' ' . $a_events['DIA'] . ', ' . $a_events['ANIO'] ?></h4>
				<?php
						}
					}
				?>
				<!-- <h4 class="id-green">15th July</h4> -->
				<h5 class="grey3 bd-font"><?php echo $a_events['TITULO'] ?></h5>
				<p class="grey2"><?php echo $a_events['COPETE'] ?></p>
				<span>See full event +</span>
			</a>
		</div>
	</section>
</div>

<script>
	var f = new Date();
	var mes = f.getMonth();
	var mes_actual = mes + 1;
	var mes_sig = mes + 2;
	var mes_sig_sig = mes + 3;
	$(document).ready(function(){
		$.ajax({
			url: 'actions/get_events.php',
			type: 'get',
			success: function(data){
				var rta = JSON.parse(data);
				var buscar_mes_actual = '#' + mes_actual + ' span';
				var buscar_mes_sig = '#' + mes_sig + ' span';
				var buscar_mes_sig_sig = '#' + mes_sig_sig + ' span';
				for(var i = 0; i < rta.length; i++) {
					if(rta[i].MES == mes_actual){
						var dias_mes_actual = $(buscar_mes_actual);
						for(var j = 0; j < dias_mes_actual.length; j++){
							if(dias_mes_actual[j].innerHTML == rta[i].DIA){
								dias_mes_actual[j].className = 'circle';
								$(dias_mes_actual[j]).attr('data-title', rta[i].TITULO);
								$(dias_mes_actual[j]).html('<a href="index.php?s=event&id=' + rta[i].ID + '">' + rta[i].DIA + '</a>');
							}
						}
					}
					
					if(rta[i].MES == mes_sig){
						var dias_mes_sig = $(buscar_mes_sig);
						for(var j = 0; j < dias_mes_sig.length; j++){
							if(dias_mes_sig[j].innerHTML == rta[i].DIA){
								dias_mes_sig[j].className = 'circle';
								$(dias_mes_sig[j]).attr('data-title', rta[i].TITULO);
								$(dias_mes_sig[j]).html('<a href="index.php?s=event&id=' + rta[i].ID + '">' + rta[i].DIA + '</a>');
							}
						}
					}

					if(rta[i].MES == mes_sig_sig){
						var dias_mes_sig_sig = $(buscar_mes_sig_sig);
						for(var j = 0; j < dias_mes_sig_sig.length; j++){
							if(dias_mes_sig_sig[j].innerHTML == rta[i].DIA){
								dias_mes_sig_sig[j].className = 'circle';
								$(dias_mes_sig_sig[j]).attr('data-title', rta[i].TITULO);
								$(dias_mes_sig_sig[j]).html('<a href="index.php?s=event&id=' + rta[i].ID + '">' + rta[i].DIA + '</a>');
							}
						}
					}
				}
			}
		});
	});
</script>
<!-- echo "<span class='circle' data-title='Event 1'><a href='#'>$day</a></span>"; -->