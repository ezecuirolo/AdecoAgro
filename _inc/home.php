<?php
	include('setup/config.php');
?>
<div id="home">
	<section id="hero">
		<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item report white active">
					<div class="container">
						<h2 class="h1 bd-font">AGRO Q1 2018<br>Earnings available</h2>
						<p>Get the latest reports package release in our financials section. <a href="javascript:;">See more</a></p>
						<a class="link caps" href="javascript:;">Annual Report Meeting</a>
						<a class="link caps" href="javascript:;">SEC Filings</a>
						<img class="desktop-only" src="img/icon-nyse_listed-trans.png" />
					</div>
				</div>
			</div>
			<!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>-->
		</div>
	</section>
		
	<section id="why-invest">
		<div class="container">
			<h2 class="h2 bd-font grey2 text-center">Why to invest in Adecoagro?</h2>
			
			<div class="row icons text-center grey3">
				<div class="col-md-3">
					<img src="img/icon-home-why01.png" />
					<p>Leading agricultural company in one of the richest supply regions</p>
				</div>
				<div class="col-md-3">
					<img src="img/icon-home-why02.png" />
					<p>Solid business divisions</p>
				</div>
				<div class="col-md-3">
					<img src="img/icon-home-why03.png" />
					<p>A strong and non-negotiable sustainability policy</p>
				</div>
				<div class="col-md-3">
					<img src="img/icon-home-why04.png" />
					<p>Seamless, fluid communication with our shareholders</p>
				</div>
			</div>
			
			<div class="nyse">
				<img src="img/icon-nyse_listed.png" class="centered"><small class="grey4">On top of our compromise,<br>we are a NYSE listed company with clear trade background.</small>
			</div>
		</div>
	</section>
		
	<section id="invest-reports">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 pack">
					<h2>Quarter<br>release pack</h2>
					<ul>
						<?php
								$consulta_quarter = "SELECT QUARTER FROM financials_quarters WHERE ANIO = YEAR(NOW()) ORDER BY QUARTER DESC LIMIT 1";

								$quarter = mysqli_query($conexion, $consulta_quarter);
								$quarter_final = mysqli_fetch_assoc($quarter);

								$quarter_actual = $quarter_final['QUARTER'];

								$consulta_last_q = <<<SQL
									SELECT
										*
									FROM
										financials_quarters
									WHERE
										ANIO = YEAR(NOW()) AND QUARTER = '$quarter_actual'
									LIMIT 6
SQL;

								$filas_q = mysqli_query($conexion, $consulta_last_q);

								while($array_q = mysqli_fetch_assoc($filas_q)){
							?>
								<li class="grey3 
									<?php 
										if($array_q['FORMATO'] == 'pdf'){ 
											echo 'pdf';
										} else if($array_q['FORMATO'] == 'mp3'){
											echo 'mp3';
										} else if($array_q['FORMATO'] == 'xls'){
											echo 'xls';
										}
									?>">
									<a href="uploads/<?php echo $array_q['ARCHIVO'] ?>" target="_blank"><?php echo $array_q['TITULO'] ?></a>
								</li>
							<?php
								}
							?>
					</ul>
				</div>
				<div id="investors" class="col-lg-6 text-center">
					<h2 class="text-left">Investor<br>Tools &amp; Resources</h2>
					<a id="unit_converter" href="#" class="white">
						<img src="img/icon-home-calc.png"><br>Unit<br>Converter
					</a><a href="javascript:;" class="white">
						<img src="img/icon-home-glasses.png"><br>Investor<br>Education
					</a><a href="javascript:;" class="white">
						<img src="img/icon-home-contact.png"><br>Contact IR
					</a>
				</div>
			</div>
		</div>
	</section>
	
	<section id="infonews" class="home">
		<div class="container">
			<div class="row">
				<div class="col-md-4 news">
					<h3 class="h3 bd-font">Newsroom</h3>
					<?php
						$consulta = <<<SQL
							SELECT
								ID,
								FECHA,
								TITULO,
								LINK
							FROM
								newsroom
							ORDER BY FECHA
							LIMIT 3
SQL;

						$news = mysqli_query($conexion, $consulta);

						while($a_news = mysqli_fetch_assoc($news)){
					?>
						<a href="index.php?s=news&id=<?php echo $a_news['ID'] ?>" class="item grey4">
							<i class="fas fa-caret-right alt-green2"></i>
							<span><?php echo $a_news['FECHA'] ?></span>
							<span><?php echo $a_news['TITULO'] ?></span>
							<!-- <span class="txt-bold">Watch video</span> -->
						</a>
					<?php		
						}
					?>
				</div>
				<div class="col-md-4 feed">
					<h3 class="h3"><i class="fab fa-twitter"></i><!-- <span class="bd-font">@AdecoagroIR</span>--></h3>
					<a href="https://twitter.com/adecoagroir" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large">Seguir a @adecoagroir</a>
					<script>
						!function(d,s,id){
							var js,fjs=d.getElementsByTagName(s)[0];
							if(!d.getElementById(id)){
								js=d.createElement(s);
								js.id=id;js.src="//platform.twitter.com/widgets.js";
								fjs.parentNode.insertBefore(js,fjs);
							}
						}(document,"script","twitter-wjs");</script>


					<a class="twitter-timeline" href="https://twitter.com/AdecoagroIR?ref_src=twsrc%5Etfw">Tweets by AdecoagroIR</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div class="col-md-4">
					<div id="calendar" class="widget">
						<h3 class="h3 bd-font white">Investor<br>Calendar</h3>
						<a href="javascript:;" class="event white">
							<i class="fas fa-caret-right"></i>
							<span class="caps">Aug 8</span><br>
							<span class="">Earnings release event</span>
						</a>
						<a href="javascript:;" class="event white">
							<i class="fas fa-caret-right"></i>
							<span class="caps">Aug 8</span><br>
							<span class="">Earnings release event</span>
						</a>
						<a href="javascript:;" class="event white">
							<i class="fas fa-caret-right"></i>
							<span class="caps">Aug 8</span><br>
							<span class="">Earnings release event</span>
						</a>
						<a href="javascript:;" class="alt-green2"><i class="far fa-calendar-alt"></i> See full calendar</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="modal_converter">
	<div class="adecoagro-converter">
		<img src="img/converter-logo.png" />
		<p class="sub-title">Converter Tool</p>
		<div class="display">
			<div class="total">Total <span class="unit">u.</span></div>
			<div class="unit-from">Unit from: <span class="unit">u.</span></div>
			<div class="unit-to">Unit to: <span class="unit">u.</span></div>
		</div>
		<div class="keys">
			<div class="numbers">
				<a href="javascript:;" class="key k7"><span>7</span></a><a href="javascript:;" class="key k8"><span>8</span></a><a href="javascript:;" class="key k9"><span>9</span></a><a href="javascript:;" class="key k4"><span>4</span></a><a href="javascript:;" class="key k5"><span>5</span></a><a href="javascript:;" class="key k6"><span>6</span></a><a href="javascript:;" class="key k1"><span>1</span></a><a href="javascript:;" class="key k2"><span>2</span></a><a href="javascript:;" class="key k3"><span>3</span></a><a href="javascript:;" class="key kdot"><span>.</span></a><a href="javascript:;" class="key k0"><span>0</span></a>
			</div><div class="eq">
				<a href="javascript:;" class="key keq"><span>=</span></a>
			</div>
		</div>
	</div>
</div>

<script></script>