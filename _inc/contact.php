<?php
	// include('setup/config.php');
?>
<div id="contact">
	<section id="form">
		<div class="container">
			<h2 class="h2 bd-font">Contact IR</h2>

			<div class="form-container">
				<form id="form_contact" method="post">
					<div class="input-container first-name">
						<label class="grey3">First Name</label>
						<input name="first-name" type="text" tabindex="1">
						<!-- <span class="error">Error description</span> -->
					</div>
					<div class="input-container last-name">
						<label class="grey3">Last Name</label>
						<input name="last-name" type="text" tabindex="2">
						<!-- <span class="error">Error description</span> -->
					</div>
					<div class="input-container email-address">
						<label class="grey3">Email Adress</label>
						<input name="email-address" type="email" tabindex="3">
						<!-- <span class="error">Error description</span> -->
					</div>
					<div class="input-container phone">
						<label class="grey3">Phone number</label>
						<input name="phone" type="tel" tabindex="4">
						<!-- <span class="error">Error description</span> -->
					</div>
					<div class="input-container company">
						<label class="grey3">Company</label>
						<input name="company" type="text" tabindex="5">
						<!-- <span class="error">Error description</span> -->
					</div>
					<div class="input-container enquiry">
						<label class="grey3">What's your enquiry to the IR team?</label>
						<textarea rows="5" name="enquiry" tabindex="6"></textarea>
						<!-- <span class="error">Error description</span> -->
					</div>
					<input type="submit" class="button white h5" value="Send Form" id="btn_enviar">
				</form>
			</div>
		</div>
	</section>
</div>
<script>
	function Validar(elemento) {
		$(elemento).blur(function(){
			if($(this).val() == ''){
				$(this).parent().addClass('error');
			} else {
				$(this).parent().removeClass('error');
			}
		});
	}

	Validar('input[name="first-name"]');
	Validar('input[name="last-name"]');
	Validar('input[name="email-address"]');
	Validar('input[name="phone"]');
	Validar('input[name="company"]');
	Validar('textarea[name="enquiry"]');


	$('#form_contact').submit(function(ev){
		ev.preventDefault();
		var t = $(this);

		var nombre = $('input[name="first-name"]').val();
		var apellido = $('input[name="last-name"]').val();
		var email = $('input[name="email-address"]').val();
		var telefono = $('input[name="phone"]').val();
		var empresa = $('input[name="company"]').val();
		var mensaje = $('textarea[name="enquiry"]').val();

		if(nombre != '' && apellido != '' && email != '' && telefono != '' && empresa != '' && mensaje != ''){
			var formData = new FormData(document.getElementById('form_contact'));

			$.ajax({
				url: 'actions/enviar.php',
				type: 'post',
				data: formData,
				processData: false,
    			contentType: false,
				success: function(data){
					console.log(data);

					if(data == 'ok') {
						var formulario = document.getElementById("form_contact");
						formulario.reset();
						$('#btn_enviar').after('<i class="fas fa-check"></i>');
					}
				}
			});
		}
	});
</script>
