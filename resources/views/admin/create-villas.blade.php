<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>StaySmart Villas | Admin Panel</title>
<head>
    @include('admin/layouts/head')
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
    @include('admin/layouts/menu')

    </div>
<!-- main content start-->
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					<div class="row">
						<h3 class="title1">Create Villas :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action={{ route("admin.villas.store") }} method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_name" placeholder="Villa Name" name="villa_name">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>

                                <!-- <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Slug</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_slug" placeholder="Villa Slug" name="villa_slug">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div> -->
                                
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Cost(Per Night)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_cost" placeholder="Villa Cost Per Night" name="villa_cost">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>

								 <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Dynamic Villa Cost(For X no of days)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="dynamic_villa_cost" placeholder="Dynamic Villa Cost(For X no of days)" name="dynamic_villa_cost">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Dynamic Villa People(For X no of cost)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="dynamic_villa_ppl" placeholder="Dynamic Villa People(For X no of cost)" name="dynamic_villa_ppl">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Maximum People Allowed</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="maximum_ppl_allowed" placeholder="Maximum People Allowed"  name="maximum_ppl_allowed">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Children's Rate</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="children_rate" placeholder="Children's Rate"  name="children_rate">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Infant's Rate</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="infant_rate" placeholder="Infant's Rate" name="infants_rate">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Extra Person Cost(Per Night)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="extra_person_cost" placeholder="Extra Person Cost(Per Night)"  name="extra_person_cost">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                
                                
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Location</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_location" placeholder="Villa Location" name="villa_location">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa State</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_name" placeholder="Villa State" name="villa_state">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Address</label>
									<div class="col-sm-8">
                                        
                                        <textarea class="form-control" id="villa_address" name="villa_address" id="villa_address"> </textarea>
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Google Map Link</label>
									<div class="col-sm-8">
                                        
									<input type="text" class="form-control1" id="gmap_link" placeholder="Google Map Link" name="gmap_link">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Villa Description</label>
									<div class="col-sm-8">
                                        
                                        <textarea class="form-control" id="villa_description" name="villa_description" id="villa_address"> </textarea>
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
                                </div>
                                
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Contact Manager</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_manager" placeholder="Villa Manager" name="villa_manager">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Amenities</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="tv"> TV</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="ac"> AC</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="laundry"> Laundry</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="parking"> Parking</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="pool"> Pool</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="river_view"> River View</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="beach_view"> Beach View</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="lake_view"> Lake View</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="indoor_games"> Indoor Games</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="video_games"> Video Games</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="lawn"> Lawn</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="music_system"> Music System</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="bonfire"> Bonfire</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="driver_accomodation"> Driver Accomodation</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="gym"> Gym</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="amenities[]" value="wifi"> Wifi</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Sleeps </label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_sleep" placeholder="Villa Sleep" name="villa_sleep">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Bedroom</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_bedroom" placeholder="Villa Bedroom" name="villa_bedroom">
									</div>
									<div class="col-sm-2">
										<p class="help-block"></p>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Bathrooms</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="villa_bathrooms" placeholder="Villa Bathrooms" name="villa_bathrooms">
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
										<input type="file" name="profile_pic" id="profile_pic" accept="image/*" class="form-control">
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
                                   
                                    <img id="img_preview">
                                    </div>
                                </div>  
								<input type="submit" class="btn btn-success" value="save">
							</form>
						</div>
					</div>
					
			</div>
        </div>
        
		@include('admin/layouts/menu')
		@include('admin/layouts/footer')

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

</body>
</html>
		