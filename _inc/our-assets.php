<div id="" class="page">	
	<section id="" class="content grey3">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<h4 style="color: black; font-weight: bold;">Our Assets</h4>
					<ul>
						<li style="color: #005838"><a style="color: black;" href="#" id="btn_arg">Argentina</a></li>
						<li style="color: #005838"><a style="color: black;" href="#" id="btn_uru">Uruguay</a></li>
						<li style="color: #005838"><a style="color: black;" href="#" id="btn_bra">Brasil</a></li>
					</ul>
				</div>
				<div class="col-10" id="div_mapa">
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1NtcOR80Vh-DvGWK5hz3OOn13zCSlqgpG" style="width: 100%; height: 60vh;"></iframe>
				</div>
			</div>
		</div>
	</section>
</div>
<script>
	$(document).ready(function(){
		$('#btn_arg').click(function(){
			$('#div_mapa').html('<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1NtcOR80Vh-DvGWK5hz3OOn13zCSlqgpG" style="width: 100%; height: 60vh;"></iframe>');
		});

		$('#btn_uru').click(function(){
			$('#div_mapa').html('<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1_Uh8GDcQ-rS9RhtGo1Va0qOuT1x3VVoY" style="width: 100%; height: 60vh;"></iframe>');
		});
	});
</script>