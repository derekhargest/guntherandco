<footer id="footer" class="site-footer">
	<div class="container">
		<div class="footer-item first">
			<div class="footer-content hours">
			<h4>Hours</h4>
			<p>Monday - Thursday</p>
			<p class="hour">5:00 pm - 10:00 pm</p>
			<p>Friday - Saturday</p>
			<p class="hour">5:00 pm - 11:00 pm</p>
			<p>Sunday</p>
			<p class="hour">5:00 pm - 9:00 pm</p>
			</div>
		</div>
		<div class="footer-item">
			<div class="footer-content address">
			<h4>Address</h4>
			<address>Gunther & Co. <br />
			3650 Toone Street<br />
			Brewers Hill<br />
			Baltimore, MD 21224</address>
			<a href="#"><span class="icon-parking-icon"></span>Parking</a>
			</div>

		</div>
		<div class="footer-item">
			<div class="footer-content connect">
			<h4>Connect</h4>
				<ul>
					<li><a href="#"><span class="icon icon-location-icon"></span> Directions</a></li>
					<li><a href="<?php echo home_url(); ?>/contact-us"><span class="icon icon-phone-icon"></span> Contact Us</a></li>
					<li><a href="<?php echo home_url(); ?>/contact-us"><span class="icon icon-icon-star"></span> Make Reservation</a></li>
				</ul>
			</div>

		</div>
		<div class="footer-item last">
			<div class="footer-content updated">
				<h4>Stay Updated</h4>
				<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="//derekhargest.us13.list-manage.com/subscribe/post?u=62d473a914ee32048e533f2a9&amp;id=bbf1d57278" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
									</label>
										<input type="email" placeholder="Your Email Address" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_62d473a914ee32048e533f2a9_bbf1d57278" tabindex="-1" value=""></div>
									  <div class="clear"><input type="submit" value="Sign Up" name="Sign Up" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
					</div>

					<!--End mc_embed_signup-->
			</div>
		</div>
	</div>
	<div class="subfooter">
		<div class="copy">
			<p>&copy; <?php echo date("Y") ?> Gunther & Co. 3650 Toone Street, Baltimore, MD 21224</p>
		</div>
		<div class="social">
			<ul>
				<li><a href="https://www.facebook.com/GuntherAndCo/" target="_blank"><span class="icon-facebook-icon"></span></a></li>
				<li><a href="https://twitter.com/eatatgunther" target="_blank"><span class="icon-twitter-icon"></span></a></li>
				<li><a href="https://www.instagram.com/eatatgunther/" target="_blank"><span class="icon-instagram-icon"></span></a></li>
			</ul>
		</div>
	</div>
</footer>

<script type="text/javascript">
	$(document).ready(function(){
		$('#mobile-menu .menu').slicknav({
			label: '',
			prependTo: '#mobile-menu-location',
			duration: '1000',
			label: 'Menu',
		});
	});
</script>

<script type="text/javascript">


	$(window).load(function(){
		if($("#banner").length > 0){
			var height = document.getElementById("banner").offsetHeight;
			document.getElementById("content-block").style.marginTop = height + 'px';
		}
	});

	$(window).load(function(){
			if ($(window).width() < 700) {
				var Headheight = document.getElementById("header").offsetHeight;
				document.getElementById("primary").style.marginTop = Headheight + 'px';
		}
	});

	</script>

	<script type="text/javascript">
		$(window).resize(function(){
			if($("#banner").length > 0){
				var height = document.getElementById("banner").offsetHeight;
				document.getElementById("content-block").style.marginTop = height + 'px';
			}
		});

		$(window).resize(function(){
					if ($(window).width() < 700) {
						var Headheight = document.getElementById("header").offsetHeight;
						document.getElementById("primary").style.marginTop = Headheight + 'px';
					}
					if ($(window).width() > 700) {
						document.getElementById("primary").style.marginTop = 0 + 'px';
					}
			});
	</script>

<script type="text/javascript">
	$(document).ready(function(){
		var headerHeight = $(".main-navigation").height();
		$(".logo").height(headerHeight);
		$(".slicknav_btn").height(headerHeight);

	});

	$(window).resize(function() {
		var headerHeight = $(".main-navigation").height();
		$(".logo").height(headerHeight);
			$(".slicknav_btn").height(headerHeight);
	});
</script>



<?php wp_footer(); ?>
</body>
</html>
