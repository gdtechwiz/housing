<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <title>{{ $villas->name }} Details | StaySmartVillas</title>
<head>
	@include('front-end/layouts/head')
	<style>
		.invalid-feedback{ display:block; }
	</style>
</head>
<body>
    @include('front-end/layouts/menu')
    <!-- {{ $idd = $villas->id }} -->
    <!--/banner-section-->
	<!-- <div id="demo-1" data-zs-src='["../front-end/photo-gallery/{{ $idd }}/2.png", "../front-end/images/1.jpg", "../front-end/images/3.jpg","../front-end/images/4.jpg"]'> -->
    <div class="row">
    <div class="container1">
        <a href="#">
            
            <img class="big" src="../front-end/photo-gallery/{{ $idd }}/2.jpg">
            <img class="thumb" src="../front-end/photo-gallery/{{ $idd }}/2_small.jpg">
        </a>

        <a href="#">
            
            <img class="big" src="../front-end/photo-gallery/{{ $idd }}/1.jpg">
            <img class="thumb" src="../front-end/photo-gallery/{{ $idd }}/1_small.jpg">
        </a>

        <a href="#">
               <img class="big featured" src="../front-end/photo-gallery/{{ $idd }}/1.jpg"> 
        </a>     
    </div>
    </div>
	<div class="row">
	<div class=" col-md-10 name_villa_div">
		 <span class="name_villa_div_content">{{ $villas->name }},{{ $villas->location }}</span>
	</div>	
	<div class="col-md-2 price_villa_div">
		<span class="price_villa_div_title">Total Cost : </span> <span class="price_villa_div_content">Rs.{{ $villas->price }}</span>
	</div>
	</div>	
<!--/banner-section-->



<!--/price-section-->
<div class="price-section">
     <div class="container">
         <div class="col-md-8 price">
            <div class="row">
                <div class="col-md-2 amenities ">
                <img src="{{ asset('front-end/icons/sleep.png') }}" class="img-responsive" alt="icon">
                <p class="txt_center">{{ $villas->sleeps }} Sleeps</p>
                </div>

                <div class="col-md-2 amenities">
                <img src="{{ asset('front-end/icons/bed.png') }}" class="img-responsive" alt="icon">
                <p class="txt_center">{{ $villas->bedrooms }} Bedrooms</p>
                </div>

                <div class="col-md-2 amenities">
                <img src="{{ asset('front-end/icons/bath.png') }}" class="img-responsive" alt="icon">
                <p class="txt_center">{{ $villas->bathrooms }} Bathrooms</p>
                </div>

                <div class="col-md-2 amenities">
                <img src="{{ asset('front-end/icons/hotel.png') }}" class="img-responsive" alt="icon">
                <p class="txt_center">Entire Place</p>
                </div>

                <div class="col-md-2 amenities">
                <img src="{{ asset('front-end/icons/moon.png') }}" class="img-responsive" alt="icon">
                <p class="txt_center">1 Night</p>
                </div>
            </div>
        <hr>
            <div class="villa_description">
                <p>
                 {!! htmlspecialchars_decode($villas->villa_description) !!}

                </p>

                
            </div>

            <div class="villa_amenities">
                <div class="row">
                    
                </div>
            </div>
          
				
		</div>	
		<div id="contactFormDiv" class="col-md-4 plat">

					<header class="book_villa_contact_form">Book This Villa</header>
				<meta name="_token" content="{{ csrf_token() }}" />  
			<ul>
			 @foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
	@if(Session::has('flash_message'))
		<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
	@endif
<form id="contactForm" class="topBefore" action="{{ route('contact.store') }}" method="POST">
  {{ csrf_field() }}
<!--@foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if(session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
                @endif -->
                
        <!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> -->

		
		  <input id="name" name="name" type="text" placeholder="NAME" required>
		    @if($errors->has('name'))
		  		<small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		    @endif
		  <input id="email" name="email" type="text" placeholder="E-MAIL" required>
		  @if($errors->has('email'))
		  		<small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
		    @endif
		  <textarea id="message" name="message" type="text" placeholder="MESSAGE" required></textarea>
		  @if($errors->has('message'))
		  		<small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
		    @endif
		  <input type="hidden" id="villa_name" name="villa_name" value="{{ $villas->name }}">
  <input id="submit" type="submit" value="Book It!">
   <div id="response">

	</div>

	    <!-- <div id="loading"><img src="images/loader.gif" alt="loader"></div> -->

  
</form>
 	
<div id="map">

</div>

		</div>
			
	</div>
	<div class="clearfix"> </div>
	</div>	
</div>

<!--//price-section-->

	



			<!-- gallery -->
	<div class="gallery agile" id="gallery">
		<div class="container">
			<h3 class="tittle"> Our <span>Gallery</span></h3>
			<div class="agile_gallery_grids w3-agile">
				<ul class="clearfix demo">
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v5.jpg') }}" alt=" " class="img-responsive" />
							
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v1.jpg') }}" alt=" " class="img-responsive" />
							
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v6.jpg') }}" alt=" " class="img-responsive" />
							
						</div>
					</li>
					<li>
						<div class="gallery-grid1">
							<img src="{{ asset('front-end/images/v3.jpg') }}" alt=" " class="img-responsive" />
							
						</div>
					</li>
					
					
					
				
				</ul>
			
			</div>
		</div>
	</div>
<!-- //gallery -->

 <!-- //Stats -->
 <div class="agitsworkw3ls" id="property">
 <h3 class="tittle"> Similar <span>Listing</span></h3>
			
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

	<script>
		$('#submit_old').click( function(e) {
     $.ajaxSetup({
         header:$('meta[name="_token"]').attr('content')
      })
      e.preventDefault;
      if( $('#contactForm').valid() ) {
		  
         ajaxSubmit();
       }
       else {
		
           $('label.error').hide().fadeIn('slow');
		   ajaxSubmit();
       }
       });
   

function ajaxSubmit() {
$('#loading').show();
$('#submit').attr('disabled', 'disabled');
var token = $('[name="_token"]').val();
var villa_name = $('#villa_name').val();
var name = $('#name').val();
var email = $('#email').val();
var message = $('#message').val();


//var data = 'name=' +name+ '&email=' +email+ '&villa_name=' +villa_name+ '&message=' +message;


$.ajax({
    url: '/',
    type: 'get',
    dataType: 'json',
    data: {_token:token,villa_name:villa_name,name:name,email:email,message:message },
    cache: false,
    success: function(response) {
            $('#loading, #contact, .message').fadeOut('slow');
            //$('#response').html('<h3>'+Lang.get('index.email_sent')+'</h3>').fadeIn('slow');
			$('#response').html('<h3>success</h3>').fadeIn('slow');
    },
    error: function(jqXHR, textStatus, errorThrown) {
            $('#loading').fadeOut('slow');
            $('#submit').removeAttr('disabled');
            $('#response').text('Error Thrown: ' +errorThrown+ '<br>jqXHR: ' +jqXHR+ '<br>textStatus: ' +textStatus ).show();
    }
});
return false;
}
	</script>

	 <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
	</script>
	
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzkCVsfeIY3Dfdqsf1I1OnYwLidovcdZ4&callback=initMap">
    </script>

</body>
</html>