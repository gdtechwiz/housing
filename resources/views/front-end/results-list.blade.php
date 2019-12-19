<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    @include('front-end/layouts/head')
</head>
<body>
	@include('front-end/layouts/menu')
	
  <!-- //Stats -->
<div class="agitsworkw3ls" id="property">

			
			<div class="col-md-8 agitsworkw3ls-grid-2">
			   <div class="info-imgs">
			         <ul>
                     @foreach($villas as $villa)
					  <li class="results_list">
						  <a href="{{ route('villa_details',$villa->slug) }}"><div class="gallery-grid1 home_selected_border">
								<!-- <img src="{{ asset('front-end/images/1.png') }}" alt=" " class="img-responsive"> -->
                                @if($villa['profile_pic'] == "")
                                <img src="{{ asset('front-end/images/no_img.jpg') }}" alt=" " class="img-responsive">
                                @else 
                                <img src="{{ asset('front-end/profile-photo/').'/'.$villa['profile_pic'] }}" alt=" " class="img-responsive">
                                @endif

                                
                                
								<div class="row">
									<div class="col-md-8">	
									<div class="p-mask ">
											<h4>{{ $villa->name }}</h4>
										<p>{{ $villa->location }},{{ $villa->state }}</p>
									</div>
									</div>
									<div class="col-md-4">
									<div class="p-mask ">
											<h4><i class="fa fa-inr"></i> <span>{{ $villa->price }}</span></h4>
										<p>&nbsp;</p>
									</div>
									
									</div>	
								</div>
							</div></a>
					  </li>
                    @endforeach
					 </ul>
			   </div>
				
			</div>
            <div id="gMap" class="col-md-6 agitsworkw3ls-grid-2">
            
            </div>
			<div class="clearfix"></div>

		</div>
	<!-- //Stats -->
	


		
	@include('front-end/layouts/footer')
	
	<script>
		window.onscroll = function() { pageScrollFunction() };
		var header = document.getElementById("header-bottom");
		var sticky = header.offsetTop;
		console.log("s",sticky);
		function pageScrollFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
				} else {
				header.classList.remove("sticky");
				}
		}

		$("#myCarousel").carousel();

	</script>

</body>
</html>