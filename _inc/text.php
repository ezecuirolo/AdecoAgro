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
			<p class="txt-bold"><?php echo $this_news['COPETE'] ?></p>
			<img class="centered" src="uploads/<?php echo $this_news['FOTO'] ?>" />
			<p><?php echo nl2br($this_news['TEXTO']) ?></p>
		</div>
	</section>
</div>