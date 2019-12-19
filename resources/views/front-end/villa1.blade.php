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
    
    <!--/banner-section-->
	<div id="demo-1" data-zs-src='["../front-end/images/2.jpg", "../front-end/images/1.jpg", "../front-end/images/3.jpg","../front-end/images/4.jpg"]'>
		
    </div>
<!--/banner-section-->

<!--/price-section-->
<div class="price-section">
     <div class="container">
         <div class="col-md-8 price">
            <div class="row price_border">
                <div class="col-md-2 amenities">
                    <img src="https://res.cloudinary.com/dowh9bxad/image/upload/q_auto,f_auto,fl_progressive/v1506582981/Group_gaqp88.jpg"  class="img-responsive" alt="icon">
                <p class="txt_center">16 Sleeps</p>
                </div>

                <div class="col-md-2 amenities">
                <img src="https://res.cloudinary.com/dowh9bxad/image/upload/q_auto,f_auto,fl_progressive/v1506582981/Bed_qneag2.jpg"  class="img-responsive" alt="icon">
                <p class="txt_center">4 Bedrooms</p>
                </div>

                <div class="col-md-2 amenities">
                <img src="https://res.cloudinary.com/dowh9bxad/image/upload/q_auto,f_auto,fl_progressive/v1506582983/Towel_pnbz2j.jpg" class="img-responsive" alt="icon">
                <p class="txt_center">5 Bathrooms</p>
                </div>

                <div class="col-md-2 amenities">
                <img src="https://res.cloudinary.com/dowh9bxad/image/upload/q_auto,f_auto,fl_progressive/v1506582976/Apartment_jycz3v.jpg" class="img-responsive" alt="icon">
                <p class="txt_center">Entire Place</p>
                </div>

                <div class="col-md-2 amenities">
                <img src="https://res.cloudinary.com/dowh9bxad/image/upload/q_auto,f_auto,fl_progressive/v1506582982/Night_usbhah.jpg" class="img-responsive" alt="icon">
                <p class="txt_center">1 Night</p>
                </div>
            </div>
        
            <div class="villa_description">
                <p>
                Set in the midst of a rustic village, this weekend home is the perfect getaway from the hustle and bustle of city life. The house is equipped with a private swimming pool, pool bar, table tennis table, pool table, dart board, chess, carrom, board games, volleyball court and much more. The famous Nagaon beach is also a 5 min car ride from the house and is a beautiful change from the usually crowded main city beaches. The close vicinity to the beach combined with a relaxing surrounding makes this villa a perfect getaway when in Alibaug. 


                </p>

                <p>Guests are open to access the house, the pool and the games house which has a kitchen/dining table and gaming facilities. The one house near the entrance is for family only and so will not be accessible to guests.

Guests are able to access the kitchen and appliances. Basic supplies including oil, butter, salt, pepper, few seasonings, sugar, tea, coffee and ketchup will be available at the house. For the rest of the supplies guests will be directed by the house help to the local market. While the house help will not be equipped to cook - they will be able to help guests. The house is strictly vegetarian, however eggs are allowed. No non-vegetarian food to be cooked in the house or ordered to the house.</p>

                <p>
                The house is most easily accessible from Mumbai via boat. You can either take a ferry (every hour from Gateway of India - tickets easily available) or rent a speedboat. For more information on renting speed boats you can contact us. - To get to the house you will need to take a 35-40 min car/rickshaw ride from Mandwa jetty. This can be organized by us at an additional cost or you can go to the jetty itself and get into a rickshaw.


                </p>

            </div>

            <div class="villa_amenities">
                <div class="row">
                    
                </div>
            </div>
          
				
		</div>	
		<div class="col-md-4 plat">

            		<header class="book_villa_contact_form">Book This Villa</header>

<form id="form" class="topBefore" method="POST">
@foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if(session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
                @endif
                
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

		
		  <input id="name" name="name" type="text" placeholder="NAME">
		  <input id="email" name="email" type="text" placeholder="E-MAIL">
		  <textarea id="message" name="message" type="text" placeholder="MESSAGE"></textarea>
  <input id="submit" type="submit" value="Book It!">
  
</form>


		</div>
			
	</div>
	<div class="clearfix"> </div>
	</div>	
</div>

<!--//price-section-->

	
  <!-- //Stats -->
<div class="agitsworkw3ls" id="property">

			
			<div class="col-md-12 agitsworkw3ls-grid-2">
			   <div class="info-imgs">
			         <ul>
					  <li>
						  <div class="gallery-grid1">
								<img src="{{ asset('front-end/images/v5.jpg') }}" alt=" " class="img-responsive">
								<div class="p-mask1">
										<h4>Fetch <span>Villa</span></h4>
									<p>Neque porro quisquam est, qui dolorem ipsum.</p>
								</div>
							</div>
					  </li>
					   <li>
					     <div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v2.jpg') }}" alt=" " class="img-responsive">
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					   </li>
						<li>
						   <div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v6.jpg') }}" alt=" " class="img-responsive">
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
						</li>
					    <li>
						  <div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v7.jpg') }}" alt=" " class="img-responsive">
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
						</li>
					 </ul>
			   </div>
				
			</div>
			<div class="clearfix"></div>

		</div>
	<!-- //Stats -->
	



			<!-- gallery -->
	<div class="gallery agile" id="gallery">
		<div class="container">
			<h3 class="tittle"> Our <span>Gallery</span></h3>
			<div class="agile_gallery_grids w3-agile">
				<ul class="clearfix demo">
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v5.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v1.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
								<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v6.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
							<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v3.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
								<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v7.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v2.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v8.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v4.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
								<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v1.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v2.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
								<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v3.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v4.jpg') }}" alt=" " class="img-responsive" />
							<div class="p-mask1">
									<h4>Fetch <span>Villa</span></h4>
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
							</div>
						</div>
					</li>
				</ul>
			
			</div>
		</div>
	</div>
<!-- //gallery -->
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