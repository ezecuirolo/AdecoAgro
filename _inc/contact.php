<?php
	// include('setup/config.php');
?>
<div id="contact">
	
	<section id="form">
		<div class="container">
			<h2 class="h2 bd-font">Contact IR</h2>
		
			<div class="form-container">
			<form>
				<div class="input-container first-name error">
					<label class="grey3">First Name</label>
					<input placeholder="" name="first-name" type="text" value="" tabindex="1">
					<span class="error">Error description</span>
				</div>
				<div class="input-container last-name">
					<label class="grey3">Last Name</label>
					<input placeholder="" name="last-name" type="text" value="" tabindex="2">
				</div>
				<div class="input-container email-address">
					<label class="grey3">Email Adress</label>
					<input placeholder="" name="email-address" type="email" value="" tabindex="3">
				</div>
				<div class="input-container phone">
					<label class="grey3">Phone number</label>
					<input placeholder="" name="phone" type="tel" value="" tabindex="4">
				</div>
				<div class="input-container company">
					<label class="grey3">Company</label>
					<input placeholder="" name="company" type="text" value="" tabindex="5">
				</div>
				<div class="input-container enquiry">
					<label class="grey3">What's your enquiry to the IR team?</label>
					<textarea rows="5" name="enquiry" tabindex="6"></textarea>
				</div>
				<button type="submit" class="button white h5">Send Form</button>
			</form>
			</div>
			
		</div>
	</section>
	
</div>