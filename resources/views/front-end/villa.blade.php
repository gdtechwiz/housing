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
    <link href="{{ asset('front-end/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/css/slideshow.css') }}" rel="stylesheet">


</head>
<body>
    @include('front-end/layouts/menu')
    <!-- {{ $idd = $villas->id }} -->
    <!--/banner-section-->
    
  <!-- <div id="demo-1" class="demo-1" data-zs-src='../front-end/profile-photo/{{ $villas["profile_pic"] }}'> 
  
 </div>	  -->
<style>
    #container_slider {
width: 100%;
height: 100%;
max-width: 1200px;
max-height: 700px;
margin: 100px auto;
position:relative;
}
</style>
 <div class="cosntainer width_fit_disv">
  <div id="container_slider"> 
<div id="slideshow" class="fullscreen"> 
    @foreach($images as $img)
    @php
    $gallery_path = $img['image_path'];
    @endphp
    <div id="img-{{ $img->id }}" data-img-id="{{ $img->id }}" class="img-wrapper" gstyle="background-image: url('../front-end/{{ $img['image_path'] }}')"><img class="img-responsive" style="width : 100%;height : 640px;" src="{{ asset('front-end/'.$gallery_path) }}"></div>

    @endforeach

    <div class="thumbs-container bottom">
<div id="prev-btn" class="prev"> <i class="fa fa-chevron-left fa-3x"></i> </div>
<ul class="thumbs">
@foreach($images as $img)
@php
    $gallery_path = $img['image_path'];
    @endphp
<li data-thumb-id="{{ $img->id   }}" class="thumb" style="background-imagse: url('../front-end/{{ $img['image_path'] }}')"><img src="{{ asset('front-end/'.$gallery_path) }}"></li>
@endforeach
<div id="next-btn" class="next"> <i class="fa fa-chevron-right fa-3x"></i> </div>

</div>
 </div>

 <!-- <ul class="clearfix demo "> -->
     <!-- <li class="villa_fit_li">
     <img src="../front-end/profile-photo/{{ $villas['profile_pic'] }}" class="profile_pic_villa_dv"  style="z-index : 10;">
     
    </li> -->

   

<!-- </ul> -->




  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

    <!-- Thumbnail images -->

    <!-- <div class="row demo1">
    @foreach($images as $image)
    @php
    $gallery_path_thumb = $image['image_path'];
    @endphp
      <div class="column">
          <img class="demo2 cursor" src="{{ asset('front-end/'.$gallery_path_thumb) }}" style="width:100%" onclick="currentSlide(1)" alt="">
        </div>
    @endforeach

    </div> -->
   
    

					
						

</div>



    <!-- <ol class="carousel-indicators">
    </ol> -->
   





   
		
			
			
				<!-- <ul class="clearfix demo">

					
					@foreach($images as $img)
					<li>
						@php
						//$pic_path = substr($img['image_path'], strrpos($img['image_path'], '/') + 3);
						
                        //$pic_path = substr($img['image_path'],52);
                        $pic_path = $img['image_path'];
						@endphp
						<div class="gallery-grid1">
						<img src="{{ asset('front-end/'.$pic_path) }}" alt=" " class="img-responsive thumbnail" />
						</div>
					</li>	
					@endforeach -->
					<!-- <li>
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
					 -->
					
					
				
				<!-- </ul> -->
			
			
		
	
<!-- //gallery -->




 
	<!-- <div class="container1">
		

		 <a href="#">
               <img class="big featured" src="{{ asset('front-end/profile-photo/').'/'.$villas['profile_pic'] }}"> 
        </a> 
		@foreach($images as $img)
	<a href="#">
            <img class="big" src="../front-end/{{ $img['image_path'] }}">
            <img class="thumb" src="../front-end/{{ $img['image_path'] }}">
		</a>
		@endforeach
    </div>-->




</ul>
<div id="next-btn" class="next"> <i class="fa fa-chevron-right fa-3x"></i> </div>
</div>


    <input type="hidden" name="villa_name" id="villa_name_div" value="{{ $villas->name }}">
	<div class="container">
        <div class=" col-md-9 name_villa_div">
                <span class="name_villa_div_content">{{ $villas->name }},{{ $villas->location }}</span>
        </div>	
        <div class="col-md-3 price_villa_div">
            <!--<span class="price_villa_div_title">Total Cost : </span>--><!--@if(!empty($villas->price )) <span class="price_villa_div_content">Rs.{{ $villas->price }} per night</span>@endif-->
            <br>
            <!-- <span class="price_villa_div_content">Rs.{{ $villas->dynamic_villa_cost }} For {{ $villas->dynamic_villa_ppl }} people</span> -->
            <span class="price_villa_div_content">Rs.{{ $villas->dynamic_villa_cost }}</span>
            <input type="hidden" name="dynamic_villa_cost" id="dynamic_villa_cost" value="{{ $villas->dynamic_villa_cost }}">
            <input type="hidden" name="dynamic_villa_ppl" id="dynamic_villa_ppl" value="{{ $villas->dynamic_villa_ppl }}">
        </div> 
    </div>
    <div class="container" >
	<div id="booking_message">
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
             <hr style="border-top: 5px solid #eee;">
            <div class="villa_description">
                <p>
                 {!! htmlspecialchars_decode($villas->villa_description) !!}

                </p>

                
            </div>
			<hr style="border-top: 5px solid #eee;">
			@php  $available_amenities_arr = explode(",",$villas->amenities);  @endphp
            <!--I removed the old amenities stuff which was causing unnecessary problems -->
            <ul>
                @foreach($available_amenities_arr as $amenity)
                <li class="col-md-4 listing_amenities">
                    <div class="listing_img">
                    <!-- @if(in_array('ac',$available_amenities_arr)) 
                        <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('parking',$available_amenities_arr))
                      <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865703/icons/xx6hxexkyrsfhkhbvuos.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('pool',$available_amenities_arr))
                        <img src="https://res.cloudinary.com/vistadev/image/upload/v1497867726/icons/yprfsvsb9uoaqudxosei.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('beach_view',$available_amenities_arr))
                        <img src="https://res.cloudinary.com/dowh9bxad/image/upload/v1498050711/icons/pkkqfrukyroicpzhgjh3.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('lawn',$available_amenities_arr))
                        <img src="https://res.cloudinary.com/dowh9bxad/image/upload/v1498051281/icons/gy6tf95vtua7rcemq5p3.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('music_system',$available_amenities_arr))
                        <img src="https://res.cloudinary.com/dowh9bxad/image/upload/v1498051343/icons/oxrinfarmotswb4dx77q.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('tv',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864635/icons/smqqf4pd2s6h0l2cnmef.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('parking',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865703/icons/xx6hxexkyrsfhkhbvuos.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('gym',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('driver_accomodation',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('bonfire',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('video_games',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865703/icons/xx6hxexkyrsfhkhbvuos.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('indoor_games',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('lake_view',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865703/icons/xx6hxexkyrsfhkhbvuos.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('laundry',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif(in_array('wifi',$available_amenities_arr))
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865107/icons/snksgpnx44hwo5l51gez.png" height="43" width="43" class="img-responsive">
                    
                    @endif -->

                    @if($amenity == "ac") 
                        <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "parking")
                      <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865703/icons/xx6hxexkyrsfhkhbvuos.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "pool")
                        <img src="https://res.cloudinary.com/vistadev/image/upload/v1497867726/icons/yprfsvsb9uoaqudxosei.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "beach_view")
                        <img src="https://res.cloudinary.com/dowh9bxad/image/upload/v1498050711/icons/pkkqfrukyroicpzhgjh3.png" height="43" width="43" class="img-responsive">
                        @elseif($amenity == "river_view")
                        <img src="https://res.cloudinary.com/dowh9bxad/image/upload/v1498050711/icons/pkkqfrukyroicpzhgjh3.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "lawn")
                        <img src="https://res.cloudinary.com/dowh9bxad/image/upload/v1498051281/icons/gy6tf95vtua7rcemq5p3.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "music_system")
                        <img src="https://res.cloudinary.com/dowh9bxad/image/upload/v1498051343/icons/oxrinfarmotswb4dx77q.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "tv")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864635/icons/smqqf4pd2s6h0l2cnmef.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "parking")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865703/icons/xx6hxexkyrsfhkhbvuos.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "gym")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "driver_accomodation")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "bonfire")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "video_games")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865703/icons/xx6hxexkyrsfhkhbvuos.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "indoor_games")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "lake_view")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865703/icons/xx6hxexkyrsfhkhbvuos.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "laundry")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497864760/icons/cmvg8aboqveoudcfcy5z.png" height="43" width="43" class="img-responsive">
                    @elseif($amenity == "wifi")
                    <img src="https://res.cloudinary.com/vistadev/image/upload/v1497865107/icons/snksgpnx44hwo5l51gez.png" height="43" width="43" class="img-responsive">
                    
                    @endif
                    
                    {{ $amenity }}
                    </div>
                </li>
                @endforeach
            </ul>
           

				
		</div>	
		<div id="contactFormDiv" class="col-md-4 plat">
            <div style="border : 2px solid #e4e4e4!important;" >
			<!-- <header class="book_villa_contact_form">Book This Villa</header> -->
				<!-- <meta name="_token" content="{{ csrf_token() }}" />  
			<ul>
			 @foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
	        @if(Session::has('flash_message'))
		    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
	        @endif -->
            <form id="contactForm" class="topBefore" action="{{ route('villa.book_property',$villas->id) }}" method="POST">
            <!-- <meta name="csrf-token" content="{{ csrf_token() }}" /> -->
            <!--@foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if(session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
                @endif -->
                
             <!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> -->

		
		     <!-- <input id="name" name="name" type="text" placeholder="NAME" required>
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
	
	        </div> -->

        <!-- <div class="form-group">     
        <input type="text" class="form-control" id="daterange" name="daterange" placeholder="Check in - Check Out" />
        </div> -->

        <div class="row margin_both_side" style="margin-top : 15px!important;">
            <div class="col-md-6">     
            <input type="text" class="form-control" id="check_in_date" name="check_in_date" placeholder="Check in Date" value="{{ date('d-M-Y') }}" style="height : 40px;" />
            </div>
            <div class="col-md-6">     
            <input type="text" class="form-control" id="check_out_date" name="check_out_date" placeholder="Check Out Date" value="{{ date('d-M-Y') }}" style="height : 40px;" />
            </div>
        </div>
       <div class="form-group margin_both_side_15">     
           No Of Day(s)
        <input type="text" class="form-control" id="no_of_days"  value="1" readonly style="height : 40px;"/>
       </div>
       <!-- <div class="form-group">    
        <input type="number" class="form-control" id="guests" name="guests" placeholder="Enter No Of Guests" />
       </div> -->
      
  
  <div class="row margin_both_side">
        <div class="col-md-4">
            Adults
            <ul class="button-group button-click dynamic_guest_list">
            <li><a href="#" class="small button secondary"><i class="fa fa-plus margin_left_no_of_guests"><span class="hide">+</span></i></a>
            </li>
            <input type="text" class="cat_textbox form-control" id="CAT_Custom_410672" name="CAT_Custom_410672" maxlength="4000" value="0" />
            <li><a href="#" class="small button secondary"><i class="fa fa-minus margin_left_no_of_guests"><span class="hide">-</span></i></a>
            </li>
            </ul>
        </div>

        <div class="col-md-4">
            Children
            <ul class="button-group button-click dynamic_guest_list">
            <li><a href="#" class="small button secondary"><i class="fa fa-plus margin_left_no_of_guests"><span class="hide">+</span></i></a>
            </li>
            <input type="text" class="cat_textbox form-control" id="CAT_Custom_410672" name="CAT_Custom_410672" maxlength="4000" value="0" />
            <li><a href="#" class="small button secondary"><i class="fa fa-minus margin_left_no_of_guests"><span class="hide">-</span></i></a>
            </li>
            </ul>
        </div>


        <div class="col-md-4">
            Infants
            <ul class="button-group button-click dynamic_guest_list">
            <li><a href="#" class="small button secondary"><i class="fa fa-plus margin_left_no_of_guests"><span class="hide">+</span></i></a>
            </li>
            <input type="text" class="cat_textbox form-control" id="CAT_Custom_410672" name="CAT_Custom_410672" maxlength="4000" value="0" />
            <li><a href="#" class="small button secondary"><i class="fa fa-minus margin_left_no_of_guests"><span class="hide">-</span></i></a>
            </li>
            </ul>
        </div>
  </div>
  <div class="form-group margin_both_side_15">
    No Of Guest(s)
      <input type="number" id="no_of_guests" class="main form-control" style="height : 40px;" value="0" readonly placeholder="" />
    </div>

   <div class="form-group margin_both_side_15" >
     <label>Maximum No Of Guests Allowed : </label>
     <div id="maximum_no_of_guests">{{ $villas->maximum_ppl_allowed }}</div>
    </div>

    <div class="form-group" id="max_users_exceed_msg" style="display : none;">
    <h3>Maximum No Of Guests Has Exceeded !!!</h3>
    </div>

    <!-- <div class="form-group margin_both_side_15" >
     <label>Extra Person Cost : </label>
     <div id="extra_person_cost">{{ $villas->extra_person_cost }}</div>
    </div> -->
  <input type="hidden" id="villa_cost" name="villa_cost" value="{{ $villas->dynamic_villa_cost }}">
        <div class="form-group" id="total_cost_div" style="display : nones;">
            
            <div class="col-md-5" style="font-weight : bold;">Total Cost</div>
            <div class="col-md-2" id="total_price">Rs.{{ $villas->dynamic_villa_cost }}</div>
        </div>
       <div class="form-group margin_both_side_15">    
        <input type="button" value="Book It!!" data-toggle="modal" data-target="#bookModal" class="btn btn-success book_property fit_div">
       </div>

	    <!-- <div id="loading"><img src="images/loader.gif" alt="loader"></div> -->

  
</form>
 	
    
</div>
			
</div>
	<div class="clearfix"> </div>
	</div>	
</div>
</div>
<!--//price-section-->

	



			<!-- gallery -->
	<div class="gallery agile" style="display : none;" id="gallery">
		<div class="container">
			<h3 class="tittle"> Our <span>Gallery</span></h3>
			<div class="agile_gallery_grids w3-agile">
				<ul class="clearfix demo ">

					
					@foreach($images as $img)
					<li>
						@php
						//$pic_path = substr($img['image_path'], strrpos($img['image_path'], '/') + 3);
						
                        //$pic_path = substr($img['image_path'],52);
                        $pic_path = $img['image_path'];
						@endphp
						<div class="gallery-grid1">
						<img src="{{ asset('front-end/'.$pic_path) }}" alt=" " class="img-responsive" />
						</div>
					</li>	
					@endforeach
					
				
				</ul>
			
			</div>
		</div>
	</div>
<!-- //gallery -->

<div id="map">

</div>

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
    <script src="{{ asset('front-end/js/lightbox.js') }}"></script>
    <script src="{{ asset('front-end/js/gallery.js') }}"></script>

     <div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div  class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Booking Confirmation</h4>
        </div>
        <div class="modal-body">
             <form class="horizontal-form frm_book_villa" method="POST"> 
             <meta name="csrf-token" content="{{ csrf_token() }}" />
             <!-- <input type="hidden" name="start_date" id="start_date">
             <input type="hidden" name="end_date" id="end_date">
             <input type="hidden" name="no_of_days" id="no_of_days">
             <input type="hidden" name="cost" id="cost">
             <input type="hidden" name="no_of_guests" id="no_of_guests"> -->
                <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" required>
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" required>
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-sm-2" for="name">Phone:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" required>
                </div>
                </div>

                <div class="form-group">
                <label class="control-label col-sm-2" for="name">Message:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Enter Your Message"></textarea>
                </div>  
                </div>
                </form> 
        </div>
        <div class="modal-footer">
            <button type="close" class="btn btn-default" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary" id="btn_book_villa">Yes</button>
        </div>
        <!-- </form> -->
    </div>
    </div>
    

	
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
         $(".btn_here").click(function(){
       
   });
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

    <script>
          $('#check_in_date').datepicker();
        //   $('#check_out_date').datepicker({
        //     onSelect: function () {
        //         myfunc();
        //             }
        //   });
        $('#check_out_date').datepicker();

        $("#check_out_date").on('change',function () {
            var initial_price = $("#villa_cost").val();
            
            var date1 = new Date($("#check_in_date").val());
        var date2 = new Date($("#check_out_date").val());
       //console.log(date2);
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
        console.log(diffDays);
         $("#no_of_days").val(diffDays);   
         //var total_price = diffDays * initial_price; Old and simple code to calculate cost
         // The complicated formula for cost
         var dynamic_cost,extra_person_cost,max_guests,dynamic_ppl,no_of_days;
         dynamic_cost = $("#dynamic_villa_cost").val();
         extra_person_cost = $("#extra_person_cost").text();
         max_guests = $("#maximum_no_of_guests").text();
         dynamic_ppl = $("#dynamic_villa_ppl").val();
         no_of_days = $("#no_of_days").val();
           var total_price = dynamic_cost + (extra_person_cost * max_guests - dynamic_ppl) * no_of_days;
            $("#total_price").text(total_price);
            console.log(total_price);
            $("#total_cost_div").css("display","block");
            
    });

        function show_difference(){
var t1=document.getElementById('check_in_date').value
t1=t1.split('-');
var dt_t1=new Date(t1[2],t1[0],t1[1]); // YYYY,mm,dd format to create date object
var dt_t1_tm=dt_t1.getTime(); // time in milliseconds for day 1

var t2=document.getElementById('check_out_date').value
t2=t2.split('-');
var dt_t2=new Date(t2[2],t2[0],t2[1]);
var dt_t2_tm=dt_t2.getTime(); // time in milliseconds for day 2

var one_day = 24*60*60*1000; // hours*minutes*seconds*milliseconds
var diff_days=Math.abs((dt_t1_tm-dt_t2_tm)/one_day); // difference in days 
diff_days=Math.floor(diff_days);  // round off the difference in days to lower value

/// Now display the result ///
// document.getElementById('display').innerHTML=' Difference in Days = ' + diff_days ;
// document.getElementById('display').style.display = 'inline';

}
            

        
    </script>

    <script>
//     var fixmeTop = $('#contactFormDiv').offset().top;       // get initial position of the element

//  $(window).scroll(function() {                  // assign scroll event listener

//      var currentScroll = $(window).scrollTop(); // get current position

//     if (currentScroll >= fixmeTop) {           // apply position: fixed if you
//          $('#contactFormDiv').css({                      // scroll to that element or below it
//              position: 'fixed',
//              top: '0',
//              'z-index' : '90',
//              right: '25px',
//              background : '#f7f7f7',
            
            
//          });
//      } else {                                   // apply position: static
//          $('#contactFormDiv').css({                      // if you scroll above it
//              position: 'static'
//          });
//      }

//  });
    </script>

    <script>
    $(function() {
  registerEvents();
});

function registerEvents(){
  $('.button-group .fa-plus').on('click', function(){
    var input = $(this).closest('li').next()
    input.val(+input.val() + 1);
    updateTravellerCount();
    return false;
  })
  $('.button-group .fa-minus').on('click', function(){
    var input = $(this).closest('li').prev()
    var val = +input.val() > 0 ? +input.val() - 1 : 0
    input.val(val);
    updateTravellerCount();
    return false;
  });
}

function updateTravellerCount(){
  var total = 0;
  $.each($('.button-group input'), function(){
    total += +$(this).val();
  });
  $('.main').val(total)
    var max_val = $('#maximum_no_of_guests').text();
     var max_no_of_guests = parseFloat($("#maximum_no_of_guests").text());
//   if(parseInt($('.main').val(total)) > parseFloat($('#maximum_no_of_guests').text()))

// Below is js code for making sure that the value is set max no of guests if this value exceeds
    if(total > max_val)
  {
     $('.main').val(max_val);
    //$('#max_users_exceed_msg').show();
    alert("Maximum No Of Guests Has Exceeded!!");
  }
  else{
    $('.main').val(total);
    
  }
  
}
    </script>

    <script type="text/javascript">
    //     function GetDays(){
    //             var date1 = new Date(document.getElementById("check_in_date").value);
    //             var date2 = new Date(document.getElementById("check_out_date").value);
    //             return parseInt((date1 - date2) / (24 * 3600 * 1000));
    //     }

    //     function calc_days(){
    //     if(document.getElementById("check_out_date")){
    //         document.getElementById("no_of_days").value=GetDays();
    //     }  
    // }



    </script>

    <script>
// Open the Modal
// function openModal() {
//   document.getElementById('myModal').style.display = "block";
// }

// // Close the Modal
// function closeModal() {
//   document.getElementById('myModal').style.display = "none";
// }

// var slideIndex = 1;
// showSlides(slideIndex);

// // Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("demo");
//   var captionText = document.getElementById("caption");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
// }


// $(function () {
//     $(".book_property").click(function(){
//         $('#bookModal').modal('show');
//     });
// });


   
    
</script>

 <!-- Code for Book Villa  -->

 <script>
 $(document).ready(function(){

       $.ajaxSetup({

headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

}

});
$("#btn_book_villa").click(function(){
    //console.log($("#no_of_days").val());
    var no_of_days = $("#no_of_days").val();
    var no_of_guests = $("#no_of_guests").val();
    var cost = $("#total_price").text();
    var start_date = $("#check_in_date").val();
    var end_date = $("#check_out_date").val();
    var villa_name = $("#villa_name_div").text();

$.ajax({
    type: "POST",
    url: "/ajaxBookVilla",
    //url : route("ajaxBookVilla"),
    data: $('.frm_book_villa').serialize() + '&no_of_days:'+no_of_days+'&no_of_guests:'+no_of_guests+'&cost:'+cost+'&start_date:'+start_date+'&end_date: '+end_date+'&villa_name:'+villa_name,
    success: function(message){
    $("#booking_message").html("<div style='background : #f7f7f7;color : #bd2b26;padding : 20px;'><h2 style='color : #bd0000;'>Thank You For Contacting Us.</h2><h3>We Have received your booking request</h3><h3>We Will Soon Contact You On Your Email or Mobile For More Details.</h3></div>");
    $("#bookModal").modal('hide');
    },
    error: function(){
        $("#booking_message").html("Unable To Process Your Request At The Moment.Kindly Try Again Later.");
    }
    });
    });
});
</script>

<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>
</body>
</html>