<?php
	include('setup/config.php');
?>
<div id="financials">
	<section id="earnings">
		<div class="container">
			<h3 class="h3 bd-font grey4">Quarterly Earnings</h3>
			<div class="row quarters">
				<?php
					$consulta_quarters = <<<SQL
						SELECT DISTINCT 
							ANIO, 
							QUARTER 
						FROM 
							financials_quarters 
						ORDER BY ANIO DESC, QUARTER DESC 
						LIMIT 4
SQL;

					$ex_consulta_quarters = mysqli_query($conexion, $consulta_quarters);

					$contador = 0;
					$anio = 0;
					while($array_consulta_quarters = mysqli_fetch_assoc($ex_consulta_quarters)):
				?>
						<div class="col-3 quarter <?php if($contador == 0){ echo 'last';} ?>">
							<h5 class="h5">
								<?php 
									if($array_consulta_quarters['ANIO'] != $anio){
										echo $array_consulta_quarters['ANIO'];
										$anio = $array_consulta_quarters['ANIO'];
									} else {
										echo '&nbsp;';
									}
								?>	
							</h5>
							<div class="pack">
								<p class="<?php if($contador == 0){ echo 'white';} else { echo 'grey3';} ?>"><?php echo $array_consulta_quarters['QUARTER'] ?></p>
								<ul>
									<?php
										$this_quarter = $array_consulta_quarters['QUARTER'];

										$consulta_archivos = <<<SQL
											SELECT
												*
											FROM
												financials_quarters
											WHERE
												QUARTER = '$this_quarter'
SQL;

										$ex_consulta_archivos = mysqli_query($conexion, $consulta_archivos);

										while($array_consulta_archivos = mysqli_fetch_assoc($ex_consulta_archivos)):
											if($array_consulta_archivos['ANIO'] == $array_consulta_quarters['ANIO']):
									?>
												<li class="
													<?php 
														if($contador == 0){
															echo 'white';
														} else { 
															echo 'grey3';
														} 

														echo ' ';	
														
														if($array_consulta_archivos['FORMATO'] == 'pdf'){ 
															echo 'pdf';
														} else if($array_consulta_archivos['FORMATO'] == 'mp3'){
															echo 'mp3';
														} else if($array_consulta_archivos['FORMATO'] == 'xls'){
															echo 'xls';
														}
													?>"><a href="javascript:;"><?php echo $array_consulta_archivos['TITULO']?></a></li>
									<?php 
											endif;
										endwhile;
									?>
								</ul>
							</div>
						</div>
				<?php
						$contador++;

					endwhile;
				?>
				<!-- <div class="col-3 quarter">
					<h5 class="h5">2017</h5>
					<div class="pack">
						<p class="grey3">Q4</p>
						<ul>
							<li class="grey3 pdf"><a href="javascript:;">Q3 ‘17 Earning Release</a></li>
							<li class="grey3 pdf"><a href="javascript:;">Q3 ’17 Financial Statement</a></li>
							<li class="grey3 pdf"><a href="javascript:;">Q3 ‘17 Results Presentation</a></li>
							<li class="grey3 mp3"><a href="javascript:;">Q3 ’17 Results Teleconference</a></li>
							<li class="grey3 pdf"><a href="javascript:;">Q3 ‘17 Teleconference Transcript</a></li>
							<li class="grey3 xls"><a href="javascript:;">Q3 ’17 Business Division segmented Spreadsheets</a></li>
						</ul>
					</div>
				</div>
				<div class="col-3 quarter">
					<h5 class="h5">&nbsp;</h5>
					<div class="pack">
						<p class="grey3">Q3</p>
						<ul>
							<li class="grey3 pdf"><a href="javascript:;">Q2 ‘17 Earning Release</a></li>
							<li class="grey3 pdf"><a href="javascript:;">Q2 ’17 Financial Statement</a></li>
							<li class="grey3 pdf"><a href="javascript:;">Q2 ‘17 Results Presentation</a></li>
							<li class="grey3 mp3"><a href="javascript:;">Q2 ’17 Results Teleconference</a></li>
							<li class="grey3 pdf"><a href="javascript:;">Q2 ‘17 Teleconference Transcript</a></li>
							<li class="grey3 xls"><a href="javascript:;">Q2 ’17 Business Division segmented Spreadsheets</a></li>
						</ul>
					</div>
				</div>
				<div class="col-3 quarter">
					<h5 class="h5">&nbsp;</h5>
					<div class="pack">
						<p class="grey3">Q2</p>
						<ul>
							<li class="grey3 pdf"><a href="javascript:;">Q1 ‘17 Earning Release</a></li>
							<li class="grey3 pdf"><a href="javascript:;">Q1 ’17 Financial Statement</a></li>
							<li class="grey3 pdf"><a href="javascript:;">Q1 ‘17 Results Presentation</a></li>
							<li class="grey3 mp3"><a href="javascript:;">Q1 ’17 Results Teleconference</a></li>
							<li class="grey3 pdf"><a href="javascript:;">Q1 ‘17 Teleconference Transcript</a></li>
							<li class="grey3 xls"><a href="javascript:;">Q1 ’17 Business Division segmented Spreadsheets</a></li>
						</ul>
					</div>
				</div> -->
			</div>

			<div class="years text-right">
				<a href="javascript:;" class="grey3">#</a>
				<a href="javascript:;" class="grey3">2017</a>
				<a href="javascript:;" class="grey3">2016</a>
				<a href="javascript:;" class="grey3">2015</a>
				<a href="javascript:;" class="grey3">2014</a>
				<a href="javascript:;" class="grey3">2013</a>
				<a href="javascript:;" class="grey3">2012</a>
				<a href="javascript:;" class="grey3">2011</a>
				<a href="javascript:;" class="grey3">2010</a>
				<a href="javascript:;" class="grey3">2009</a>
				<a href="javascript:;" class="grey3">2008</a>
				<a href="javascript:;" class="grey3">2007</a>
				<a href="javascript:;" class="grey3">2006</a>
				<a href="javascript:;" class="grey3">2005</a>
				<a href="javascript:;" class="grey3">2004</a>
				<a href="javascript:;" class="grey3">2003</a>
				<a href="javascript:;" class="grey3">2002</a>
			</div>
			<small class="grey2">Some of the information or materials made available on this website may contain forward-looking statements. Statements including words such as "believe," "may," "will," "estimate," "continue," "anticipate," "intend," "expect" or similar expressions are intended to identify forward-looking statements. These forward-looking statements are subject to assumptions, risks and uncertainties that could cause actual events or actual future results to differ materially from the expectations set forth in the forward-looking statements. Some of the factors which could cause Adecoagro’s results to differ materially from its expectations include, but are not limited to, those described in detail in the <a href="javascript:;">Risk Factors page.</a></small>
		</div>
	</section>
	
	<section id="agm">
		<div class="container">
			<h3 class="h3 bd-font grey4">Annual General Meetings</h3>
			<h5 class="txt-bold grey2">GENERAL INFORMATION</h5>
			<p>Date: Wednesday, April 18, 2018<br>Time: AGM at  12 pm (CET), Luxembourg Time<br>Location: Vertigo Naos Building, 6 Rue Eugène Ruppert, L - 2453 Luxembourg</p>
			<div class="row meetings">
				<div class="col-sm-6">
					<a class="button white" href="javascript:;"><i class="fas fa-caret-right grey2"></i> Agenda AGM 2018</a>
					<a class="button white" href="javascript:;"><i class="fas fa-caret-right grey2"></i> Proxy Card for AGM 2018</a>
					<a class="button white" href="javascript:;"><i class="fas fa-caret-right grey2"></i> Convening Notice with Board of Directors recommendations</a>
				</div>
				<div class="col-sm-6">
					<a class="button white" href="javascript:;"><i class="fas fa-caret-right grey2"></i> Annual accounts and annual report as of December 31, 2017<br>and Consolidated Financial Statements as of and for the years ended<br>December 31, 2017, 2016, and 2015</a>
				</div>
			</div>
		</div>
	</section>
		
	<!-- <section id="sec-filings">
		<div class="container">
			<h3 class="h3 bd-font grey4">SEC Filings</h3>
			<form class="text-right">
				<select>
					<option>Type 1</option>
					<option>Type 2</option>
					<option>Type 3</option>
					<option>Type 4</option>
					<option>Type 5</option>
					<option>Type 6</option>
				</select>
				<select>
					<option>2008</option>
					<option>2009</option>
					<option>2010</option>
					<option>2011</option>
					<option>2012</option>
					<option>2013</option>
					<option>2014</option>
					<option>2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
				</select>
			</form>
			<table class="table table-striped">
				<thead>
					<tr class="txt-bold">
						<th scope="col">Date</th>
						<th scope="col">Filling Type</th>
						<th scope="col">Reported by</th>
						<th scope="col">Description</th>
						<th scope="col">View/Download</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>May 23, 2018</td>
						<td>DFR14A</td>
						<td>ADECOAGRO S.A.</td>
						<td>Revised Proxy Soliciting</td>
						<td>
							<a href="javascript:;"><img src="img/icon-pdf.png" /></a>
							<a href="javascript:;"><img src="img/icon-xls.png" /></a>
						</td>
					</tr>
					<tr>
						<td>May 23, 2018</td>
						<td>DFR14A</td>
						<td>ADECOAGRO S.A.</td>
						<td>Revised Proxy Soliciting</td>
						<td>
							<a href="javascript:;"><img src="img/icon-pdf.png" /></a>
							<a href="javascript:;"><img src="img/icon-xls.png" /></a>
						</td>
					</tr>
					<tr>
						<td>May 23, 2018</td>
						<td>DFR14A</td>
						<td>ADECOAGRO S.A.</td>
						<td>Proxy Statement (definitive)</td>
						<td>
							<a href="javascript:;"><img src="img/icon-pdf.png" /></a>
							<a href="javascript:;"><img src="img/icon-xls.png" /></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section> -->
</div>