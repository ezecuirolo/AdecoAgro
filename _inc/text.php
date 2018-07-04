<?php
	include('setup/config.php');

	$id = $_GET['id'];

	$consulta = <<<SQL
		SELECT
			*
		FROM
			newsroom
		WHERE ID = $id
		LIMIT 1
SQL;

	$news = mysqli_query($conexion, $consulta);
	$this_news = mysqli_fetch_assoc($news);
?>
<div id="text">
	<section id="" class="">
		<div class="container content">
			<span class="top grey2"><?php echo $this_news['SUBTITULO'] ?></span>
			<h1 class="bd-font h1"><?php echo $this_news['TITULO'] ?></h1>
			<p class="txt-bold">Starting in July, FinTech start-ups based in Europe can onboard to Adecoagro’s global network in as little as four weeks. The new FinTech fast-track program provides rapid onboarding and reduced fees to help early stage start-ups gain access to the capabilities that lie within Adecoagros’s network to power their own ideas.</p>
			<img class="centered" src="img/news-sample.jpg" />
			<p><?php echo nl2br($this_news['TEXTO']) ?></p>
		</div>
	</section>
</div>
