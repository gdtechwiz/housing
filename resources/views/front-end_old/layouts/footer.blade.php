<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-top-grids">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>About Us</h4>
						
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Become Booking Partner</h4>
						
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Terms Of Use</h4>
						
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Privacy Policy </h4>
						
                    </div>
                    <div class="col-md-3 footer-grid">
						<h4>Contact Us </h4>
						
                    </div>
                    <div class="col-md-3 footer-grid">
						<h4>FAQ </h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">
					<div class="col-md-4 footer-bottom-left">
						<h4>Download our mobile Apps</h4>
						<div class="d-apps">
							<ul>
								<li><a href="#"><img src="{{ asset('front-end/images/app1.png') }}" alt="" /></a></li>
								<li><a href="#"><img src="{{ asset('front-end/images/app2.png') }}" alt="" /></a></a></li>
								<li><a href="#"><img src="{{ asset('front-end/images/app3.png') }}" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>We Accept</h4>
						<div class="a-cards">
							<ul>
								<li><a href="#"><img src="{{ asset('front-end/images/c1.png') }}" alt="" /></a></li>
								<li><a href="#"><img src="{{ asset('front-end/images/c2.png') }}" alt="" /></a></a></li>
								<li><a href="#"><img src="{{ asset('front-end/images/c3.png') }}" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>Follow Us</h4>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © 2015 Govihar . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="{{ asset('front-end/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('front-end/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
	<script src="{{ asset('front-end/js/jquery-ui.js') }}"></script>
	<script type="text/javascript" src="{{ asset('front-end/js/script.js') }}"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>