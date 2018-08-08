	<footer>
		<div class="newsletter white text-center">
			<div class="container">
				<p>Subscribe to our newsletter and get all our financial news and information in your inbox.</p>
				<form>
					<input class="grey4" type="email" placeholder="your@email-address.com" />
					<button class="button ghost white" type="submit">Subscribe</button>
				</form>
			</div>
		</div>
		<div class="down grey2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 txt">
						<p class="h3 hlight bd-font">adecoagro</p>
						<ul>
							<li><a href="http://www.adecoagro.com/" target="_blank">Global Site</a></li>
							<li><a href="index.php?s=business-divisions">Business Divisions</a></li>
							<li><a href="javascript:;">Sustainability</a></li>
							<li><a href="index.php?s=contact">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-3 txt">
						<p class="h3 hlight bd-font">Legal + Privacy</p>
						<ul>
							<li><a href="javascript:;">Privacy Policy</a></li>
							<li><a href="javascript:;">Terms of Use</a></li>
							<li><a href="javascript:;">Intellectual property rights</a></li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="stock">
							<p class="h3 hlight bd-font block">Stock Quote</p>
							<div class="row">
								<div class="col-3">Price</div>
								<div class="col-3 bd-font alt-green2 text-right">241.1</div>
								<div class="col-3">Change %</div>
								<div class="col-3 alt-green2 text-right"><i class="fas fa-angle-up alt-green2"></i> <span class="bd-font alt-green2">3.53%</span></div>
								<div class="col-3">Change</div>
								<div class="col-3 alt-green2 text-right"><i class="fas fa-angle-up alt-green2"></i> <span class="bd-font alt-green2">8.51</span></div>
								<div class="col-3">Volume</div>
								<div class="col-3 bd-font white text-right">25,203,203</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">©Copyright 2002-2018 Adecoagro.<br>All Rights Reserved.</div>
					<div class="col-sm-6 text-right">
						<img class="marks" src="img/footer-marks.png">
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script>
		var hamburgers = document.querySelectorAll(".hamburger");
		if (hamburgers.length > 0) {
			forEach(hamburgers, function(hamburger) {
				hamburger.addEventListener("click", function() {
					this.classList.toggle("is-active");
				}, false);
			});
		}

	</script>
