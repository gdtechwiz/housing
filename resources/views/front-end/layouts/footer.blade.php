<div class="contact-w3ls" id="contact">
		<div class="container">
			<div class="footer-grids w3-agileits">
				<div class="col-md-4 footer-grid">
					<p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Mumbai,India.</p>
					<p><a href="mailto:info@staysmartvillas.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@staysmartvillas.com</a></p>
					<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>882 882 0088</p>
				</div>
				<div class="col-md-4 footer-grid">
					<ul>
						
						<li><a  href="{{ route('home') }}">Home</a></li>
						<li><a  href="{{ route('searchVillasAlibaug') }}">Alibaug</a></li>
						<li><a  href="{{ route('searchVillasLonavala') }}">Lonavala</a></li>
						<li><a  href="{{ route('searchVillasPanvel') }}">Panvel</a></li>
						<li><a  href="{{ route('searchVillasKhandala') }}">Khandala</a></li>
					</ul>
				</div>
				
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-instagram">
					<a href="#"><img src="{{ asset('front-end/images/v5.jpg') }}" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="{{ asset('front-end/images/v3.jpg') }}" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="#"><img src="{{ asset('front-end/images/v2.jpg') }}" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="{{ asset('front-end/images/v4.jpg') }}" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<h3 class="text-center follow">Follow <span>Us</span></h3>
				<ul class="social-icons1 agileinfo">
					<li><a href="https://www.facebook.com/StaySmartVillas/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/staysmartvillas/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				</ul>	
				<div class="w3agile_footer_copy">
				    <p>© 2017 Fetch Villa. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
     </div>
	
</div>

		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="{{ asset('front-end/js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ asset('front-end/js/jquery.zoomslider.min.js') }}"></script>
		<!-- search-jQuery -->
				<script src="{{ asset('front-end/js/main.js') }}"></script>
			<!-- //search-jQuery -->
					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems:3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 2
						    		}
						    	}
						    });
						    
						});
			</script>
			<script type="text/javascript" src="{{ asset('front-end/js/jquery.flexisel.js') }}"></script>

	<!-- Horizontal-Tabs-JavaScript -->
				<script src="{{ asset('front-end/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',
							width: 'auto',
							fit: true,
						});
					});
				</script>
			<!-- Horizontal-Tabs-JavaScript -->
			<script src="{{ asset('front-end/js/jquery.picEyes.js') }}"></script>
				<script>
					$(function(){
						//picturesEyes($('.demo li'));
						//$('.demo li').picEyes(); ->old working code
						//$('.demo1 li').picEyes();
					});
				</script>
				<!--start-smooth-scrolling-->
<!--/script-->
<script type="text/javascript" src="{{ asset('front-end/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('front-end/js/easing.js') }}"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
<script src="{{ asset('front-end/js/bootstrap.min.js') }}"></script>

