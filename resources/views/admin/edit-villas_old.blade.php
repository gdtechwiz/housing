<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Villas | StaySmart Villas</title>
<head>
    @include('admin/layouts/head')
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
    @include('admin/layouts/menu')
    
    <link rel="stylesheet" href="{{ asset('admin/dropzone-master/dist/min/dropzone.min.css') }}">


    </div>
<!-- main content start-->
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Forms</h2>
					<div class="row">
						<h3 class="title1">General Form :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action={{ route("admin.villas.update",$villas->id) }} method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_name" value="{{ $villas->name }}" placeholder="Villa Name" name="villa_name">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>

                                
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Cost(Per Night)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_cost" placeholder="Villa Cost(Per Night)" value="{{ $villas->price }}" name="villa_cost">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Location</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_location" value="{{ $villas->location }}" placeholder="Villa Location" name="villa_location">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa State</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_name" value="{{ $villas->state }}" placeholder="Villa State" name="villa_state">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Address</label>
									<div class="col-sm-8">
                                        
                                        <textarea class="form-control" id="villa_address" name="villa_address" id="villa_address">{{ $villas->address }} </textarea>
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Google Map Link</label>
									<div class="col-sm-8">
                                        
									<input type="text" class="form-control1" id="gmap_link" value="{{ $villas->gmap_link }}" placeholder="Google Map Link" name="gmap_link">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Description</label>
									<div class="col-sm-8">
                                        
                                        <textarea class="form-control" id="villa_description" name="villa_description" id="villa_description"> {{ $villas->villa_description }}</textarea>
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Contact Manager</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_manager" placeholder="Villa Manager" value="{{ $villas->contact_manager }}" name="villa_manager">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								
                                @php  $available_amenities_arr = explode(",",$villas->amenities);  @endphp
                                <div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Amenities</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="tv" @if(in_array('tv',$available_amenities_arr)) checked @endif> TV</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="ac" @if(in_array('ac',$available_amenities_arr)) checked @endif> AC</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="laundry" @if(in_array('laundry',$available_amenities_arr)) checked @endif> Laundry</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="parking" @if(in_array('parking',$available_amenities_arr)) checked @endif> Parking</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="pool" @if(in_array('pool',$available_amenities_arr)) checked @endif> Pool</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="river_view" @if(in_array('river_view',$available_amenities_arr)) checked @endif> River View</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="beach_view" @if(in_array('beach_view',$available_amenities_arr)) checked @endif> Beach View</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="lake_view" @if(in_array('lake_view',$available_amenities_arr)) checked @endif> Lake View</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="indoor_games" @if(in_array('indoor_games',$available_amenities_arr)) checked @endif> Indoor Games</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="video_games" @if(in_array('video_games',$available_amenities_arr)) checked @endif> Video Games</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="lawn" @if(in_array('lawn',$available_amenities_arr)) checked @endif> Lawn</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="music_system" @if(in_array('music_system',$available_amenities_arr)) checked @endif> Music System</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="bonfire" @if(in_array('bonfire',$available_amenities_arr)) checked @endif> Bonfire</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="driver_accomodation" @if(in_array('driver_accomodation',$available_amenities_arr)) checked @endif> Driver Accomodation</label></div>
                                        <div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="gym" @if(in_array('gym',$available_amenities_arr)) checked @endif> Gym</label></div>
                                        <div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="wifi" @if(in_array('wifi',$available_amenities_arr)) checked @endif> WiFi</label></div>
									</div>
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Sleeps </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_sleep" placeholder="Villa Sleep" value="{{ $villas->sleeps }}" name="villa_sleep">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Bedroom</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_bedroom" placeholder="Villa Bedroom" value="{{ $villas->bedrooms }}" name="villa_bedroom">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Bathrooms</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_bathrooms" placeholder="Villa Bathrooms" value="{{ $villas->bathrooms }}" name="villa_bathrooms">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Set This Villa As Featured ?</label>
									<div class="col-sm-8">
										<select class="form-control" name="set_featured_as">
											<option>Select</option>
											<option value="yes">Yes</option>
											<option value="no">No</option>
										</select>		
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Set Profile Picture</label>
									<div class="col-sm-8">
										<input type="file" name="profile_pic" id="profile_pic" value="{{ $villas->profile_pic }}" class="form-control">
										@if ($errors->has('profile_pic'))
										<span class="help-block">
											<strong>{{ $errors->first('profile_pic') }}</strong>
										</span>
	        							@endif	
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8">
                                   
                                    <img src="{{ asset('front-end/profile-photo/').'/'.$villas['profile_pic'] }}" id="img_preview">
                                    </div>
                                </div>  
								<input type="submit" class="btn btn-success" value="save">
                            </form>
                            
                        </div>
                        
					</div>
					
					<div class="form-group" style="display : none;">
						Your Current Picture Gallery :
						@foreach($photos as $img)
					<li style="list-style : none;">
						@php
						//$pic_path = substr($img['image_path'], strrpos($img['image_path'], '/') + 3);
						
						$pic_path = substr($img['image_path'],52);
						@endphp

						
						<div class="gallery-grid1">
						<img src="{{ asset('front-end/'.$pic_path) }}" alt=" " class="img-responsive" />
						</div>
					</li>	
					@endforeach

					</div>
			<table>
					@foreach($photos as $img)		 
							     <tr>
									 
									 <td>
										 @php
										 <!-- /*$pic_path = substr($img['image_path'],52);*/ -->
										 $pic_path = $img['image_path'];
										@endphp
										<img src="{{ asset('front-end/'.$pic_path) }}" alt=" " class="img-responsive" />
									 </td> 
									 <td>
									<form id="delete_form_{{ $img->id }}" action="{{ route('admin.villas_pix.delete',$img->id) }}" style="display:none;" method="POST">
									{{ csrf_field() }}
									
									<input type="hidden" name="_method" value="delete" />
									</form>
									<a href="" onclick="
									if(confirm('Are You Sure you want to delete this image?')){
									event.preventDefault();
									document.getElementById('delete_form_{{ $img->id }}').submit();
									} 
									else
									{ event.preventDefault(); }"><span class="glyphicon glyphicon-trash"></span></a>
									</td>
									 
								 </tr>
							@endforeach
								</table>
							
                    
                    <div class="form-group">
                    <form action="{{ route('admin.villas.uploadImages',$villas->id) }}" class="dropzone" method="POST">
                    {{ csrf_field() }}
                    </form>
                    </div>
					
			</div>
        </div>
        
        <!-- @include('admin/layouts/menu') -->
        @include('admin/layouts/footer')
        <script>
            
        </script>

        <script type="text/javascript" src="{{ asset('admin/dropzone-master/dist/min/dropzone.min.js') }}"></script>
        
        <script>
            function readURL(input) {

        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#img_preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
        }
        }

        $("#profile_pic").change(function() {
        readURL(this);
        });
        </script>
<style>
    #img_preview{ width : 50%; }
    </style>
    <script>
          CKEDITOR.replace( 'villa_description' );

        </script>
</body>
</html>
		