    <!--
Author: W3layouts
Author URL: http://w3layouts.com
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
    
	
		<!-- container -->
		<div class="container">
        <form name="basicform" id="basicform" method="post" action="yourpage.html">

        <!-- id will be unique, but class name will be same -->
        <div id="sf1" class="frm">
            <fieldset>
                <legend>Step 1 of 5</legend>

                <div class="form-group">
                <label class="col-lg-2 control-label" for="title">Title For Listing: </label>
                <div class="col-lg-10">
                    <input type="text" placeholder="Title For Listing" id="title" name="title" class="form-control" autocomplete="off">
                </div>
                </div>
                
                <div class="clearfix" style="height: 10px;clear: both;"></div>
                
                <div class="form-group">
                
                    <div class="col-lg-3">
                        <select class="form-control" name="property_type" id="property_type">
                            <option>Property Type</option>
                            <option></option>    
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <select class="form-control" name="no_of_bedroom" id="no_of_bedroom">
                            <option>No Of Bedroom</option>
                            <option></option>    
                        </select>
                    </div>

                     <div class="col-lg-3">
                        <select class="form-control" name="no_of_bathroom" id="no_of_bathroom">
                            <option>No Of Bathroom</option>
                            <option></option>    
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <select class="form-control" name="guest_capacity" id="guest_capacity">
                            <option>Guest Capacity</option>
                            <option></option>    
                        </select>
                    </div>

                </div>

                <div class="clearfix" style="height: 10px;clear: both;"></div>


                <div class="form-group">
                <label class="col-lg-2 control-label" for="title">List Of Amenities: </label>
                <div class="col-lg-10">
                <label class="checkbox-inline"><input type="checkbox" name="amenities" value="swimming_pool">Swimming Pool</label>
                <label class="checkbox-inline"><input type="checkbox" name="amenities" value="kid_pool">Kid's Pool</label>
                <label class="checkbox-inline"><input type="checkbox" name="amenities" value="play_are">Play Area</label>
                <label class="checkbox-inline"><input type="checkbox" name="amenities" value="home_theatre">Home Theatre</label>
                <label class="checkbox-inline"><input type="checkbox" name="amenities" value="garden">Garden</label>
                <label class="checkbox-inline"><input type="checkbox" name="amenities" value="caretaker">Caretaker</label>
                <label class="checkbox-inline"><input type="checkbox" name="amenities" value="cook">Cook</label>
                </div>
                </div>

                <div class="clearfix" style="height: 10px;clear: both;"></div>


                <div class="form-group">
                <label class="col-lg-2 control-label" for="title">Description: </label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="description" id="description"></textarea>
                </div>
                </div>
                
                <div class="clearfix" style="height: 10px;clear: both;"></div>

                <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <!-- open1 is given in the class that is binded with the click event -->
                    <button class="btn btn-primary open1" type="button">Save &amp; Next <span class="fa fa-arrow-right"></span></button> 
                </div>
                </div>

        </fieldset>

       
        
        </div>

        <!-- id will be unique, but class name will be same -->
        <div id="sf2" class="frm">
        <!--  user email field will be here with next and previous button -->
        <fieldset>
            <legend>Step 2 of 5</legend>

             <div class="form-group">
                <label class="col-lg-2 control-label" for="title">City: </label>
                <div class="col-lg-10">
                    <input type="text" placeholder="City" id="city" name="city" class="form-control" autocomplete="off">
            </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label" for="title">Property Name: </label>
                <div class="col-lg-10">
                    <input type="text" placeholder="Property Name" id="property_name" name="property_name" class="form-control" autocomplete="off">
            </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label" for="title">Street Address: </label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="street_address" id="street_address" placeholder="Street Address"></textarea>
            </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label" for="title">ZIP/Postal Code: </label>
                <div class="col-lg-10">
                    <input type="text" placeholder="ZIP Code" id="zipcode" name="zipcode" class="form-control" autocomplete="off">
            </div>
            </div>

            <div id="map">
            </div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <!-- back2 unique class name  -->
                <button class="btn btn-warning back2" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <!-- open2 unique class name -->
                <button class="btn btn-primary open2" type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>
            

        </fieldset>

        </div>

        <!-- id will be unique, but class name will be same -->
        <div id="sf3" class="frm">
        <!--  password and confirm password field will be here with submit and previous button -->
        <fieldset>
            <legend>Step 3 of 5</legend>

             <div class="form-group">
                <label class="col-lg-2 control-label" for="weekend_charge">Weekend Charge: </label>
                <div class="col-lg-6">
                    <input type="text" placeholder="Weekend Charge Per Night" id="weekend_charge" name="weekend_charge" class="form-control" autocomplete="off">
                    
                </div>
                <div class="col-lg-4">
                <input type="text" placeholder="For People" id="for_people_weekend" name="for_people_weekend" class="form-control" autocomplete="off">
                </div>     
             </div>

             <div class="form-group">
                <label class="col-lg-2 control-label" for="weekday_charge">Week Day Charge: </label>
                <div class="col-lg-6">
                    <input type="text" placeholder="Week Day Charge Per Night" id="weekday_charge" name="weekday_charge" class="form-control" autocomplete="off">
                    
                </div>
                <div class="col-lg-4">
                <input type="text" placeholder="For People" id="for_people_weekday" name="for_people_weekday" class="form-control" autocomplete="off">
                </div>     
             </div>

             <div class="form-group">
                <label class="col-lg-2 control-label" for="other_charges">Other Charges: </label>
                <div class="col-lg-6">
                    <input type="text" placeholder="Other Charge Per Night" id="other_charge" name="other_charge" class="form-control" autocomplete="off">
                    
                </div>
                <div class="col-lg-4">
                <input type="text" placeholder="Describe" id="for_people_other" name="for_people_other" class="form-control" autocomplete="off">
                </div>     
             </div>

             <div class="form-group">
                <label class="col-lg-2 control-label" for="extra_person_charge">Extra Person Charges: </label>
                <div class="col-lg-6">
                    <input type="text" placeholder="Extra Person Charge Per Night" id="extra_person_charge" name="extra_person_charge" class="form-control" autocomplete="off">
                    
                </div>
                    
             </div>

             <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <!-- Unique class name -->
                <button class="btn btn-warning back3" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <!-- Unique class name -->
                <button class="btn btn-primary open3" type="button">Submit </button> 
                <img src="spinner.gif" alt="" id="loader" style="display: none">
              </div>
            </div>
            </div>

        </fieldset>

        </div>

        </form>
        </div>
    
    @include("front-end/layouts/footer");		
<script type="text/javascript" src="{{ asset('front-end/js/multistep_registration_new.js') }}"></script>
</body>

<script type="text/javascript" src="{{ asset('front-end/js/jquery-validation-1.17.0/dist/jquery.validate.js') }}"></script>

<script type="text/javascript">
jQuery().ready(function() {

  var v = jQuery("#basicform").validate({
      rules: {
        title: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
        
      },
      errorElement: "span",
      errorClass: "help-inline",
    });

});
</script>

<script type="text/javascript">
jQuery().ready(function() {

  // Binding next button on first step
  $(".open1").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf2").show("slow");
      }
   });

   // Binding next button on second step
   $(".open2").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf3").show("slow");
      }
    });

     // Binding back button on second step
    $(".back2").click(function() {
      $(".frm").hide("fast");
      $("#sf1").show("slow");
    });

     // Binding back button on third step
     $(".back3").click(function() {
      $(".frm").hide("fast");
      $("#sf2").show("slow");
    });

    $(".open3").click(function() {
      if (v.form()) {
        // optional
        // used delay form submission for a seccond and show a loader image
        $("#loader").show();
         setTimeout(function(){
           $("#basicform").html('<h2>Thanks for your time.</h2>');
         }, 1000);
        // Remove this if you are not using ajax method for submitting values
        return false;
      }
    });
});
</script>